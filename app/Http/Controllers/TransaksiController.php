<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataMember = [
            "perpanjang" => false,
            "input_member" => null,
            "member_id" => null,
            "pesan" => null,
        ];

        if ($request->member_id) {
            $member = Member::where('member_id', $request->member_id)->first();

            if ($member) {
                $dataMember = [
                    "perpanjang" => true,
                    "input_member" => $request->member_id,
                    "member_id" => $member->member_id,
                    "pesan" => "$member->name | $member->game"
                ];
                Alert::success('Member id ditemukan.');
                session()->flash('success', 'Member id ditemukan');

            } else {
                $dataMember = [
                    "perpanjang" => true,
                    "input_member" => $request->member_id,
                    "member_id" => null,
                    "pesan" => "-"
                ];
                Alert::error('Member id tidak ditemukan.');
            }
        }

        $authUser = Auth::user();

        return view('user.transaksi', compact('authUser', 'dataMember'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Memeriksa jenis game yang dipilih oleh pengguna. Jika game adalah "Mobile Legends," kita hanya memerlukan validasi pada 'name', 'game', dan 'paket'.
        if ($request->input('game') == 'Mobile Legends') {
            $request->validate([
                'name' => 'required',
                'game' => 'required',
                'paket' => 'required',
            ]);

            // Menyiapkan data yang akan dimasukkan ke database
            $data['name'] = $request->input('name');
            $data['game'] = $request->input('game');
            $data['paket'] = $request->input('expired_date');

        } else {
            // Jika game bukan "Mobile Legends," kita memerlukan validasi untuk 'name', 'game', 'serial', dan 'paket'.
            $request->validate([
                'name' => 'required',
                'game' => 'required',
                'serial' => 'required',
                'paket' => 'required',
            ]);

            // Menyiapkan data yang akan dimasukkan ke database
            $data['name'] = $request->input('name');
            $data['game'] = $request->input('game');
            $data['serial'] = $request->input('serial');
            $data['paket'] = $request->input('expired_date');
        }

        // Mengambil waktu sekarang untuk dimasukkan ke kolom created_at
        $currentDateTime = Carbon::now();

        // Menghitung tanggal kedaluwarsa berdasarkan pilihan paket yang dipilih oleh user
        $currentDateTime2 = Carbon::now();

        $expiredDate = $currentDateTime2; // Waktu untuk expired_date

        switch ($request->input('paket')) {
            case '1':
                $expiredDate->addDays(1);
                break;
            case '4':
                $expiredDate->addDays(4);
                break;
            case '9':
                $expiredDate->addDays(9);
                break;
            case '35':
                $expiredDate->addDays(35);
                break;
            // dan seterusnya
        }

        // Menambahkan tanggal kedaluwarsa dan created_at ke dalam data
        $data['created_at'] = $currentDateTime;
        $data['expired_date'] = $expiredDate;
        $data['created_by'] = Auth::user()->id;

        // Membuat member key secara acak
        $randomStr = Str::random(8);
        $memberId = "MEMBER - " . strtoupper($randomStr);
        $data['member_id'] = $memberId;

        // Ambil user login
        $authUser = Auth::user();
        $transaksi = $authUser->transaksi;

        // Tambahkan transaksi 
        $transaksi + 1;

        // Simpan ke user
        $authUser->transaksi = $transaksi;
        $authUser->save();

        // Ambil user pendapatan
        $pendapatan = $authUser->pendapatan;
        $selectedPaket = $request->input('paket');

        switch ($selectedPaket) {
            case '1':
                $pendapatan += 10000;
                break;
            case '4':
                $pendapatan += 25000;
                break;
            case '9':
                $pendapatan += 50000;
                break;
            case '35':
                $pendapatan += 100000;
                break;
            // dan seterusnya
        }

        // Simpan ke user
        $authUser->pendapatan = $pendapatan;
        $authUser->save();

        // Ambil user saldo
        $saldo = $authUser->saldo;

        // Hitung pengurangan saldo
        $hargaPaket = 0; // Inisialisasi dengan 0

        switch ($selectedPaket) {
            case '1':
                $hargaPaket = 5000;
                break;
            case '4':
                $hargaPaket = 12500;
                break;
            case '9':
                $hargaPaket = 25000;
                break;
            case '35':
                $hargaPaket = 50000;
                break;
            // dan seterusnya
        }

        // Inisialisasi rentang point berdasarkan paket yang dipilih
        $minPoint = 0;
        $maxPoint = 0;

        // Point yang akan didapatkan
        switch ($selectedPaket) {
            case '1':
                $minPoint = 250;
                $maxPoint = 750;
                break;
            case '4':
                $minPoint = 1000;
                $maxPoint = 1875;
                break;
            case '9':
                $minPoint = 2500;
                $maxPoint = 3750;
                break;
            case '35':
                $minPoint = 5000;
                $maxPoint = 7500;
                break;
            // dan seterusnya
        }

        // Periksa apakah saldo cukup untuk membeli paket
        if ($saldo >= $hargaPaket) {
            // Kurangkan saldo
            $saldo -= $hargaPaket;

            // Simpan saldo kembali ke user
            $authUser->saldo = $saldo;

            // Hitung poin acak antara $minPoint dan $maxPoint
            $randomPoint = rand($minPoint, $maxPoint);

            // Hitung poin baru pengguna
            $point = $authUser->point + $randomPoint;

            // Simpan poin baru ke user
            $authUser->point = $point;
            $authUser->save();
        } else {
            return redirect('/transaksi')->with('error', 'Saldo anda tidak cukup.');
        }

        // Menyimpan data ke dalam database menggunakan model Member
        $data['transaksi'] = $transaksi;
        Member::create($data);

        // Mengalihkan pengguna kembali ke halaman transaksi dengan pesan sukses dan data yang baru dimasukkan
        return redirect('/transaksi')->with('success', 'Transaksi berhasil.')->with('success-transaksi', 'Transaksi berhasil.')->with('data', $data)->withInput();
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $member = Member::find($id);

        $request->validate([
            'member_id' => 'required',
            'paket' => 'required'
        ]);

        $data = [
            'member_id' => $request->input('member_id'),
        ];

        // Mengambil waktu sekarang untuk dimasukkan ke kolom created_at
        $currentDateTime = Carbon::now();

        // Menghitung tanggal kedaluwarsa berdasarkan pilihan paket yang dipilih oleh user
        $member = Member::where('member_id', $request->member_id)->first();
        $expiredDate = Carbon::parse($member->expired_date);

        $now = Carbon::now();

        // Jika expired data tanggalnya sudah terlewati, maka tambahkan
        if ($expiredDate < $now) {
            $expiredDate = Carbon::now();
            switch ($request->input('paket')) {
                case '1':
                    $expiredDate->addDays(1);
                    break;
                case '4':
                    $expiredDate->addDays(4);
                    break;
                case '9':
                    $expiredDate->addDays(9);
                    break;
                case '35':
                    $expiredDate->addDays(35);
                    break;
                // dan seterusnya
            }
        } else {
            switch ($request->input('paket')) {
                case '1':
                    $expiredDate->addDays(1);
                    break;
                case '4':
                    $expiredDate->addDays(4);
                    break;
                case '9':
                    $expiredDate->addDays(9);
                    break;
                case '35':
                    $expiredDate->addDays(35);
                    break;
                // dan seterusnya
            }
        }

        // Menambahkan tanggal kedaluwarsa dan created_at ke dalam data
        $data['updated_at'] = $currentDateTime;
        $data['expired_date'] = $expiredDate;

        // Ambil user login
        $authUser = Auth::user();
        $transaksi = $authUser->transaksi;

        // Tambahkan transaksi 
        $transaksi + 1;

        // Simpan ke user
        $authUser->transaksi = $transaksi;
        $authUser->save();

        // Ambil user pendapatan
        $pendapatan = $authUser->pendapatan;
        $selectedPaket = $request->input('paket');

        switch ($selectedPaket) {
            case '1':
                $pendapatan += 10000;
                break;
            case '4':
                $pendapatan += 25000;
                break;
            case '9':
                $pendapatan += 50000;
                break;
            case '35':
                $pendapatan += 100000;
                break;
            // dan seterusnya
        }

        // Simpan ke user
        $authUser->pendapatan = $pendapatan;
        $authUser->save();

        // Ambil user saldo
        $saldo = $authUser->saldo;

        // Hitung pengurangan saldo
        $hargaPaket = 0; // Inisialisasi dengan 0

        switch ($selectedPaket) {
            case '1':
                $hargaPaket = 5000;
                break;
            case '4':
                $hargaPaket = 12500;
                break;
            case '9':
                $hargaPaket = 25000;
                break;
            case '35':
                $hargaPaket = 50000;
                break;
            // dan seterusnya
        }

        // Inisialisasi rentang point berdasarkan paket yang dipilih
        $minPoint = 0;
        $maxPoint = 0;

        // Point yang akan didapatkan
        switch ($selectedPaket) {
            case '1':
                $minPoint = 250;
                $maxPoint = 750;
                break;
            case '4':
                $minPoint = 1000;
                $maxPoint = 1875;
                break;
            case '9':
                $minPoint = 2500;
                $maxPoint = 3750;
                break;
            case '35':
                $minPoint = 5000;
                $maxPoint = 7500;
                break;
            // dan seterusnya
        }

        // Periksa apakah saldo cukup untuk membeli paket
        if ($saldo >= $hargaPaket) {
            // Kurangkan saldo
            $saldo -= $hargaPaket;

            // Simpan saldo kembali ke user
            $authUser->saldo = $saldo;

            // Hitung poin acak antara $minPoint dan $maxPoint
            $randomPoint = rand($minPoint, $maxPoint);

            // Hitung poin baru pengguna
            $point = $authUser->point + $randomPoint;

            // Simpan poin baru ke user
            $authUser->point = $point;
            $authUser->save();
        } else {
            return redirect('/transaksi')->with('error', 'Saldo anda tidak cukup.');
        }

        // Mengambil data game member
        $member = Member::where('member_id', $id)->first();
        $game = $member->game;
        $name = $member->name;
        session()->put('game', $game);
        session()->put('name', $name);

        // Ambil user login
        $authUser = Auth::user();
        Member::where('member_id', $id)->update($data);

        // Mengalihkan pengguna kembali ke halaman transaksi dengan pesan sukses dan data yang baru dimasukkan
        return redirect('/transaksi')->with('success', 'Berhasil perpanjang.')->with('success-perpanjang', 'Berhasil perpanjang.')->with('data', $data)->withInput();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

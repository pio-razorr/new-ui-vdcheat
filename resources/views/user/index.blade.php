@extends('user.layout.main')

@section('title', 'Dashboard')

@section('content-body')
    <section class="row">
        <div class="col-12">

            {{-- INFORMASI SALDO, TRANSAKSI, POINT, PENDAPATAN --}}
            <div class="row">
                @if (Auth::user()->role == 'ceo' || Auth::user()->role == 'admin')
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon purple me-3">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Sisa saldo</h6>
                                            @if ($authUser->saldo >= 10000000)
                                                <h6 class="font-extrabold mb-0">Tidak terbatas</h6>
                                            @else
                                                <h6 class="font-extrabold mb-0">
                                                    {{ number_format($authUser->saldo, 0, ',', '.') }}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif (Auth::user()->role == 'resseler_vip')
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon purple me-3">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Sisa saldo</h6>
                                            @if ($authUser->saldo >= 10000000)
                                                <h6 class="font-extrabold mb-0">Tidak terbatas</h6>
                                            @else
                                                <h6 class="font-extrabold mb-0">
                                                    {{ number_format($authUser->saldo, 0, ',', '.') }}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon purple me-3">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Sisa saldo</h6>
                                            @if ($authUser->saldo >= 10000000)
                                                <h6 class="font-extrabold mb-0">Tidak terbatas</h6>
                                            @else
                                                <h6 class="font-extrabold mb-0">
                                                    {{ number_format($authUser->saldo, 0, ',', '.') }}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->role == 'ceo' || Auth::user()->role == 'admin')
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex align-items-center">
                                            <div class="stats-icon blue me-3">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Transaksi</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->transaksi, 0, ',', '.') }} Kali
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif (Auth::user()->role == 'resseler_vip')
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex align-items-center">
                                            <div class="stats-icon blue me-3">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Transaksi</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->transaksi, 0, ',', '.') }} Kali
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex align-items-center">
                                            <div class="stats-icon blue me-3">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Transaksi</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->transaksi, 0, ',', '.') }} Kali
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->role == 'resseler' && Auth::user()->saldo <= 10000000)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon green me-3">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Point</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->point, 0, ',', '.') }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->role == 'ceo' || Auth::user()->role == 'admin')
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon red me-3">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Pendapatan</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->pendapatan, 0, ',', '.') }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif (Auth::user()->role == 'resseler_vip')
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon red me-3">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Pendapatan</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->pendapatan, 0, ',', '.') }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-12 d-flex justify-content-start ">
                                        <div class="d-flex">
                                            <div class="stats-icon red me-3">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Pendapatan</h6>
                                            <h6 class="font-extrabold mb-0">
                                                {{ number_format($authUser->pendapatan, 0, ',', '.') }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            {{-- INFORMASI SALDO, TRANSAKSI, POINT, PENDAPATAN --}}

            {{-- INFORMASI SALDO, TRANSAKSI, POINT, PENDAPATAN --}}
            {{-- <div class="row">
                <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Sisa saldo</h6>
                                    @if ($authUser->saldo >= 10000000)
                                        <h6 class="font-extrabold mb-0">Unlimited</h6>
                                    @else
                                        <h6 class="font-extrabold mb-0">
                                            {{ number_format($authUser->saldo, 0, ',', '.') }}</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Transaksi</h6>
                                    <h6 class="font-extrabold mb-0">{{ $authUser->transaksi }} Kali</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Point</h6>
                                    <h6 class="font-extrabold mb-0">
                                        @if (Auth::user()->role == 'ceo')
                                            Lu CEO !!!
                                        @elseif (Auth::user()->role == 'admin')
                                            Lu Admin !!!
                                        @else
                                            {{ number_format($authUser->point, 0, ',', '.') }}
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pendapatan</h6>
                                    <h6 class="font-extrabold mb-0">
                                        {{ number_format($authUser->pendapatan, 0, ',', '.') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- INFORMASI SALDO, TRANSAKSI, POINT, PENDAPATAN --}}

            <div class="row">

                <div class="col-lg-6">

                    {{-- INFORMASI AKUN --}}
                    <div class="card" data-aos="zoom-in" data-aos-duration="1500">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Informasi Akun</h4>
                                {{-- <p class="card-text">
                                    Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee
                                    sugar plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
                                </p> --}}
                                <ul class="list-group">

                                    <li class="list-group-item active">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-person-vcard me-1"></i>
                                                Nama
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ $authUser->name }}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-person-circle me-1"></i>
                                                Username
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ $authUser->username }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item active">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-bar-chart me-1"></i>
                                                Level akun
                                            </div>
                                            <div class="col-6 text-end">
                                                @if ($authUser->role == 'resseler')
                                                    Resseler
                                                @elseif ($authUser->role == 'resseler_vip')
                                                    Resseler VIP
                                                @elseif ($authUser->role == 'admin')
                                                    Admin
                                                @elseif ($authUser->role == 'ceo')
                                                    CEO
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-calendar-event me-1"></i>
                                                Tanggal daftar
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ $authUser->created_at }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item active">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-telephone me-1"></i>
                                                No. Hp
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ '0' . preg_replace('/^62/', '', $authUser->no_hp) }}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-check-circle me-1"></i>
                                                Status
                                            </div>
                                            <div class="col-6 text-end">
                                                <span class="badge bg-success">AKTIF</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item active">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-people me-1"></i>
                                                Member aktif
                                            </div>
                                            <div class="col-6 text-end">
                                                @if (count($members) > 0)
                                                    {{ count($members) }}
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    @if ($authUser->role == 'admin' || ($authUser->role == 'resseler' && $authUser->saldo > 10000000))
                                        <li class="list-group-item mb-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-calendar-event me-1"></i>
                                                    Masa berlaku
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ $authUser->expired_date }}
                                                </div>
                                            </div>
                                        </li>
                                    @endif


                                </ul>
                            </div>
                        </div>
                        {{-- <div class="card-footer d-flex justify-content-between">
                            <span>Card Footer</span>
                            <button class="btn btn-light-primary">Read More</button>
                        </div> --}}
                    </div>
                    {{-- END INFORMASI AKUN --}}

                </div>

                <div class="col-lg-6">

                    {{-- STATUS CHEAT --}}
                    <div class="card" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Status Cheat</h4>
                                {{-- <p class="card-text">
                                        Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee
                                        sugar plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
                                    </p> --}}
                                <ul class="list-group">

                                    @foreach ($game as $data)
                                        <li class="list-group-item mb-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    {{ $data->nama_game }}
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if ($data->status === 'aktif')
                                                        <span class="badge bg-success">AKTIF</span>
                                                    @elseif ($data->status === 'tidak_aktif')
                                                        <span class="badge bg-danger">MAINTENANCE</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        {{-- <div class="card-footer d-flex justify-content-between">
                                <span>Card Footer</span>
                                <button class="btn btn-light-primary">Read More</button>
                            </div> --}}
                    </div>
                    {{-- END STATUS CHEAT --}}

                    {{-- RIWAYAT TRANSAKSI --}}
                    {{-- <div class="card" data-aos="zoom-in" data-aos-duration="2500">
                    <div class="card-header">
                        <h4 class="card-title">Riwayat terakhir</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <div class="list-group">

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Game</th>
                                            <th>Paket</th>
                                            <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($historyTransaksis as $historyTransaksi)
                                            <tr>
                                                <td>{{ $historyTransaksi->name }}</td>
                                                <td>{{ $historyTransaksi->game }}</td>
                                                <td>{{ $historyTransaksi->paket }}</td>
                                                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                                                <td>{{ $historyTransaksi->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div> --}}
                    {{-- END RIWAYAT TRANSAKSI --}}

                </div>
            </div>

            {{-- RIWAYAT TRANSAKSI --}}
            <div class="row">
                <div class="col">
                    <div class="card" data-aos="zoom-in" data-aos-duration="2500">
                        {{-- <div class="card-header mb-0">
                        <h4 class="card-title">Riwayat Transaksi</h4>
                    </div> --}}
                        <div class="card-content">
                            <div class="card-body">
                                @if (count($historyTransaksis) > 0)
                                    <h4>Riwayat Transaksi</h4>
                                    {{-- <p class="card-text">Using the most basic table up, here’s how
                                    <code>.table</code>-based tables look in Bootstrap. You can use any
                                    example
                                    of below table for your table and it can be use with any type of
                                    bootstrap tables.
                                </p> --}}
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-lg" id="history-transaksi">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Produk</th>
                                                    <th>Paket</th>
                                                    <th>Oleh</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($historyTransaksis as $historyTransaksi)
                                                    <tr>
                                                        <td class="text-bold-500">{{ $loop->iteration }}
                                                        </td>
                                                        <td>{{ $historyTransaksi->game }}</td>
                                                        <td>
                                                            @if (Str::contains($historyTransaksi->transaction_type, 'perpanjang'))
                                                                {{ preg_replace('/[^0-9 +]/', '', $historyTransaksi->transaction_type) }}
                                                                hari
                                                            @elseif (Str::contains($historyTransaksi->transaction_type, 'order personal'))
                                                                {{ preg_replace('/[^0-9 +]/', '', $historyTransaksi->transaction_type) }}
                                                                hari
                                                            @endif
                                                        </td>
                                                        <td class="text-bold-500">
                                                            {{ $historyTransaksi->nama }}</td>
                                                        <td class="text-bold-500">
                                                            {{ $historyTransaksi->created_at }}</td>
                                                        <td>
                                                            <span class="badge bg-success">SUKSES</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <h2 class="m-0">Tidak ada riwayat transaksi</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END RIWAYAT TRANSAKSI --}}
        </div>
    </section>
@endsection

@extends('user.layout.main')

@section('title', 'Aktivasi User')

@section('content-body')
    <section class="row">

        {{-- CARD AKTIVASI USER --}}
        <div class="col-lg-6">
            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Informasi</h4>
                        <p class="card-text">
                            1. Aktivasi user hanya bisa dilakukan 1x, jika ingin aktivasi kembali harap tunggu sampai batas
                            waktu akunnya berakhir baru aktivasi kembali.
                        </p>
                        <p class="card-text">
                            2. Aktivasi akan merubah user dengan level resseler menjadi <b>Resseler VIP,</b> pertimbangkan
                            terlebih dahulu sebelum klik aktivasi.
                        </p>
                        <hr>
                        <form class="form" action="/aktivasi-user" method="get">
                            <div class="form-body">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Masukkan username"
                                        name="username" id="username" value="{{ $dataUser['input_username'] }}" required>
                                    <button class="btn btn-primary" type="submit">Cek</button>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <label for="info-member">Info Akun</label>
                            <input type="text" class="form-control" id="info-member" placeholder="-"
                                value="{{ $dataUser['pesan'] }}" disabled>
                        </div>

                        @if (session('success'))
                            <form action="/aktivasi-user/{{ $dataUser['input_username'] }}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="username" value="{{ $dataUser['input_username'] }}">

                                <div class="form-actions mt-4">
                                    <button type="submit" class="btn btn-primary me-1">Aktivasi</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- END CARD AKTIVASI USER --}}

        <div class="col-lg-6">
            {{-- CARD SELESAI AKTIVASI USER --}}
            @if (Session::get('success-aktivasi-user'))
                <div class="card mb-0" id="card-screenshot" data-aos="zoom-in" data-aos-duration="1000">
                    {{-- <div class="card-header">
                    <h4 class="card-title"><i class="bi bi-check2-all me-2"></i>Alvin Cheat - Pembelian
                        Cheat</h4>
                </div> --}}
                    <div class="card-content">
                        <div class="card-body">
                            <div class="alert alert-light-success color-success"><i
                                    class="bi bi-check-circle me-2"></i>VVIP MODS - Aktivasi User.
                            </div>
                            <div class="list-group">

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-person-vcard me-1"></i>
                                                Target username
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ session('user.username') }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-person-circle me-1"></i>
                                                Pemilik
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ session('user.name') }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-person-circle me-1"></i>
                                                Level akun
                                            </div>
                                            <div class="col-6 text-end">
                                                @if (session('user.role') == 'resseler_vip')
                                                    Resseler VIP
                                                @else
                                                    Admin
                                                @endif
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-controller me-1"></i>
                                                Diaktivasi oleh
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ $authUser->name }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-calendar-event me-1"></i>
                                                Tgl. aktivasi
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ session('user.updated_at') }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-calendar-event me-1"></i>
                                                Tgl. expired
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ session('user.expired_date') }}
                                            </div>
                                        </div>
                                    </li>

                                    <p>Terima kasih ❤</p>
                                    <p>User VIP telah teraktivasi</p>
                                    <p>Screenshot bukti transaksi ini dan berikan kepada pembeli sebagai
                                        bukti
                                        valid pembelian.</p>
                                </ul>

                                {{-- <p class="text-center">Tidak ada riwayat.</p> --}}

                                {{-- <a href="#" class="list-group-item list-group-item-action active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-white">
                                {{ $authUser->name }}</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">
                            {{ $authUser->name }} melakukan pembelian paket Point Blank Zepetto 1
                            Hari.
                        </p>
                    </a> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" data-aos="zoom-in">
                    <div class="card-content">
                        <div class="card-body">
                            <p><b class="fs-italic">Screenshot bukti
                                    pendaftaran ini dan berikan
                                    kepada pembeli sebagai bukti
                                    valid.</b></p>
                            <div id="preview-container" class="d-none"></div>
                            <button class="btn btn-primary btn-sm" id="capture-button">Screenshot</button>
                            <a id="download-button" class="btn btn-success btn-sm d-none">Download
                                screenshot</a>
                        </div>
                    </div>
                </div>
            @endif
            {{-- CARD SELESAI AKTIVASI USER --}}
        </div>


        {{-- RIWAYAT TRANSAKSI --}}
        {{-- <div class="col-lg-6">
            <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card-header">
                    <h4 class="card-title">Riwayat terakhir</h4>
                </div>
                <div class="card-content">
                    <div class="card-body pt-0">
                        <div class="list-group">

                            <p class="text-center">Tidak ada riwayat.</p>

                            <a href="#" class="list-group-item list-group-item-action active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 text-white">
                                        {{ $authUser->name }}</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">
                                    Transfer saldo 999.999 oleh {{ $authUser->name }} untuk piotestresseler.
                                </p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- END RIWAYAT TRANSAKSI --}}

    </section>
@endsection

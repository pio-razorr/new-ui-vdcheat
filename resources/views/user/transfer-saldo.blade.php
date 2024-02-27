@extends('user.layout.main')

@section('title', 'Transfer Saldo')

@section('content-body')
    <section class="row">

        {{-- CARD TRANSFER SALDO --}}
        <div class="col-lg-6">
            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Informasi</h4>
                        <p class="card-text">
                            1. Penerima saldo hanya ressseler.
                        </p>
                        <p class="card-text">
                            2. Pastikan username tujuan sesuai.
                        </p>
                        <p class="card-text">
                            3. Minimal transfer saldo adalah 1 juta.
                        </p>

                        <hr>

                        <form class="form" action="/transfer-saldo" method="get">
                            <div class="form-body">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Masukkan username"
                                        name="username" id="username" value="{{ $dataUser['username'] }}" required>
                                    <button class="btn btn-primary" type="submit">Cek</button>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <label for="info-user">Info User</label>
                            <input type="text" class="form-control" id="info-user" placeholder="-"
                                value="{{ $dataUser['pesan'] }}" disabled>
                        </div>

                        @if (session('success-username'))
                            <form action="/transfer-saldo" method="post">
                                @csrf
                                <input type="hidden" name="username" value="{{ $dataUser['username'] }}">
                                <div class="form-group">
                                    <label for="nominal-transfer">Nominal transfer</label>
                                    <input type="number" class="form-control" id="nominal-transfer"
                                        placeholder="Masukkan nominal transfer" value="{{ old('saldo') }}" name="saldo"
                                        required>
                                </div>

                                <div class="form-actions mt-4">
                                    <button type="submit" class="btn btn-primary">Transfer</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- END CARD TRANSFER SALDO --}}

        {{-- CARD SELESAI TRANSFER SALDO --}}
        <div class="col-lg-6">
            @if (Session::get('success-transfer-saldo'))
                <div class="card mb-0" id="card-screenshot" data-aos="zoom-in" data-aos-duration="1000">
                    {{-- <div class="card-header">
                        <h4 class="card-title"><i class="bi bi-check2-all me-2"></i>Alvin Cheat - Pembelian
                            Cheat</h4>
                    </div> --}}
                    <div class="card-content">
                        <div class="card-body">
                            <div class="alert alert-light-success color-success"><i class="bi bi-check-circle me-2"></i>VVIP
                                MODS - Transfer Saldo.
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
                                                {{ session('data.username') }}
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
                                                {{ session('data.name') }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-controller me-1"></i>
                                                Pengirim
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ $authUser->name }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-database me-1"></i>
                                                Nominal
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ number_format(session('session.nominal-transfer'), 0, ',', '.') }}
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="bi bi-calendar-event me-1"></i>
                                                Tgl. transfer
                                            </div>
                                            <div class="col-6 text-end">
                                                {{ session('data.updated_at') }}
                                            </div>
                                        </div>
                                    </li>

                                    <p>Terima kasih ❤</p>
                                    <p>Saldo telah terkirim ke {{ session('data.name') }}</p>
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
        </div>
        {{-- CARD SELESAI TRANSFER SALDO --}}

        {{-- RIWAYAT TRANSFER SALDO --}}
        <div class="row">
            <div class="col">
                <div class="card" data-aos="zoom-in" data-aos-duration="2500">
                    {{-- <div class="card-header mb-0">
                                <h4 class="card-title">Riwayat Transaksi</h4>
                            </div> --}}
                    <div class="card-content">
                        <div class="card-body">
                            @if (count($historyTransferSaldos) > 0)
                                <h4>Riwayat transfer saldo</h4>
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
                                                <th>Pengirim</th>
                                                <th>Pemilik</th>
                                                <th>Tanggal</th>
                                                <th>Nominal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($historyTransferSaldos as $historyTransferSaldo)
                                                <tr>
                                                    <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                    <td>{{ $historyTransferSaldo->nama }}</td>
                                                    <td>{{ $historyTransferSaldo->kepada }}</td>
                                                    <td class="text-bold-500">{{ $historyTransferSaldo->created_at }}</td>
                                                    <td class="text-bold-500">{{ number_format((float) $historyTransferSaldo->total, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h2 class="m-0">Tidak ada riwayat transfer saldo</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END RIWAYAT TRANSFER SALDO --}}

    </section>
@endsection

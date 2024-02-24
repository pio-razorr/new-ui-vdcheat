@extends('user.layout.main')

@section('title', 'Data User')

@section('content-body')
    <section class="row">
        <div class="col-12">

            <div class="row">
                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    {{-- <div class="card-header">
                    <h5 class="card-title">Data User</h5>
                </div> --}}
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Data user</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false" tabindex="-1">Tambah user</a>
                            </li>
                        </ul>

                        <div class="tab-content my-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                @if (count($allUsers) > 0)
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0" id="data-user">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Level</th>
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>No. Hp</th>
                                                    <th>Status</th>
                                                    <th>Saldo</th>
                                                    <th>Point</th>
                                                    <th>Transaksi</th>
                                                    <th>Tgl. Daftar</th>
                                                    <th>Tgl. Expired</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allUsers as $user)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            @if ($user->role == 'resseler_vip')
                                                                Resseler VIP
                                                            @elseif ($user->role == 'resseler')
                                                                Resseler
                                                            @elseif ($user->role == 'admin')
                                                                Admin
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ '0' . preg_replace('/^62/', '', $user->no_hp) }}</td>
                                                        <td>
                                                            @if ($user->status == 'banned')
                                                                <span class="badge bg-warning">BANNED</span>
                                                            @elseif ($user->role == 'resseler')
                                                                <span class="badge bg-success">AKTIF</span>
                                                            @elseif ($user->role == 'admin' || $user->role == 'resseler_vip')
                                                                @if (strtotime($user->expired_date) < time())
                                                                    <span class="badge bg-danger">TIDAK AKTIF</span>
                                                                @else
                                                                    <span class="badge bg-success">AKTIF</span>
                                                                @endif
                                                            @endif
                                                        </td>


                                                        <td>
                                                            @if ($user->saldo >= 10000000)
                                                                Unlimited
                                                            @else
                                                                {{ number_format($user->saldo, 0, ',', '.') }}
                                                            @endif
                                                            {{-- {{ number_format($user->saldo, 0, ',', '.') }} --}}
                                                        </td>
                                                        <td>{{ number_format($user->point, 0, ',', '.') }}
                                                        </td>
                                                        <td>{{ number_format($user->transaksi, 0, ',', '.') }}
                                                        </td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>
                                                            @if ($user->role && $user->expired_date && \Carbon\Carbon::parse($user->expired_date)->year <= 2100)
                                                                {{ $user->expired_date }}
                                                            @else
                                                                <p class="text-center mb-0">-</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                @if (in_array($user->role, ['admin', 'resseler_vip']) && $user->status == 'banned')
                                                                    <form action="{{ '/unbanned/' . $user->id }}"
                                                                        method="POST" class="unbanned-form">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button type="submit"
                                                                            class="btn icon btn-sm btn-success me-2"
                                                                            data-confirm-delete="true">
                                                                            <i class="bi bi-check-circle"></i>
                                                                        </button>
                                                                    </form>
                                                                @endif

                                                                @if (in_array($user->role, ['admin', 'resseler_vip']) && $user->status == 'unbanned')
                                                                    <form action="{{ '/banned/' . $user->id }}"
                                                                        method="POST" class="banned-form">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button type="submit"
                                                                            class="btn icon btn-sm btn-warning me-2"
                                                                            data-confirm-delete="true">
                                                                            <i class="bi bi-ban"></i>
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                                @if (Auth::user()->role == 'ceo')
                                                                    <a href="{{ '/ubah-user/' . $user->id . '/edit' }}"
                                                                        class="btn icon btn-sm btn-primary me-2">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </a>
                                                                @endif
                                                                <form action="{{ '/data-user/' . $user->id }}"
                                                                    method="POST" class="delete-user-form">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn icon btn-sm btn-danger"
                                                                        data-confirm-delete="true">
                                                                        <i class="bi bi-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <h1>Data kosong</h1>
                                @endif
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="card-title mb-4">Informasi</h4>
                                        <p class="card-text">
                                            1. Resseler yang telah dibuat, akan memiliki saldo 0. Lakukan
                                            transfer
                                            saldo jika ingin menambahkan saldo pada user yang baru saja
                                            dibuat.
                                        </p>
                                        <p class="card-text">
                                            2. Admin & Resseler VIP wajib aktivasi melalui CEO terlebih
                                            dahulu
                                        </p>
                                        <hr>
                                        <form id="tambah-user-form" class="form" action="#" method="post">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="name">Nama</label>
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Masukkan nama" name="name" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" id="username"
                                                            placeholder="Masukkan username" name="username" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="text" class="form-control" id="password"
                                                            placeholder="Masukkan password" name="password" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="no-hp">Nomor Hp</label>
                                                        <input type="number" class="form-control" id="no-hp"
                                                            placeholder="Masukkan nomor hp" name="no_hp" required>
                                                    </div>

                                                    <fieldset class="form-group">
                                                        <label for="level-akun">Level</label>
                                                        <select class="form-select" id="level-akun" name="role"
                                                            required>
                                                            <option selected hidden>Pilih level
                                                            </option>

                                                            <option value="resseler">Resseler</option>

                                                            @if (Auth::user()->role == 'ceo')
                                                                <option value="admin">Admin</option>
                                                            @endif

                                                        </select>
                                                    </fieldset>
                                                </div>

                                            </div>
                                            <div class="form-actions mt-4">
                                                <button type="submit" class="btn btn-primary">Daftar</button>
                                            </div>
                                        </form>
                                    </div>

                                    <hr class="my-4 d-block d-md-none">

                                    <div class="col-lg-6">
                                        {{-- CARD SELESAI TAMBAH USER --}}
                                        @if (Session::get('success-pendaftaran'))
                                            <div class="card mb-0" id="card-screenshot" data-aos="zoom-in"
                                                data-aos-duration="1000">
                                                {{-- <div class="card-header">
                                                <h4 class="card-title"><i
                                                        class="bi bi-check2-all me-2"></i>Alvin Cheat -
                                                    Pembelian Cheat</h4>
                                            </div> --}}
                                                <div class="card-content">
                                                    <div class="card-body pb-0">
                                                        <div class="alert alert-light-success color-success">
                                                            <i class="bi bi-check-circle me-2"></i>VVIP MODS - Pendaftaran
                                                            Akun.
                                                        </div>
                                                        <div class="list-group">

                                                            <ul class="list-group">

                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <i class="bi bi-person-vcard me-1"></i>
                                                                            Nama
                                                                        </div>
                                                                        <div class="col-8 text-end">
                                                                            {{ session('data.name') }}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <i class="bi bi-person-circle me-1"></i>
                                                                            Username
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            {{ session('data.username') }}
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <i class="bi bi-controller me-1"></i>
                                                                            Password
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            {{ session('data.password') }}
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <i class="bi bi-database me-1"></i>
                                                                            Level
                                                                        </div>
                                                                        <div class="col-9 text-end">
                                                                            @if (session('data.role') == 'admin')
                                                                                Admin
                                                                            @else
                                                                                Resseler
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <i class="bi bi-box-seam me-1"></i>
                                                                            Nomor Hp
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            {{ session('data.no_hp') }}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <i class="bi bi-coin me-1"></i>
                                                                            Tgl. Daftar
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            {{ session('data.created_at') }}
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <i class="bi bi-calendar-event me-1"></i>
                                                                            Oleh
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            {{ Auth::user()->name }}
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item mb-2">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <i class="bi bi-calendar-x me-1"></i>
                                                                            Link login
                                                                        </div>
                                                                        <div class="col-6 text-end">
                                                                            https://www.vvipmods.com/
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <p>Terima kasih sudah daftar ❤</p>
                                                                <p>Demi keamanan dan tidak adanya salah
                                                                    paham, segera login dan ubah password.
                                                                </p>
                                                                <p>Login member <a
                                                                        href="http://www.instagram.com/pio_razorr">http://www.instagram.com/pio_razorr</a>
                                                                </p>

                                                            </ul>

                                                            {{-- <p class="text-center">Tidak ada riwayat.</p>

                                                        <a href="#"
                                                            class="list-group-item list-group-item-action active">
                                                            <div
                                                                class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-1 text-white">
                                                                    {{ $authUser->name }}</h5>
                                                                <small>3 days ago</small>
                                                            </div>
                                                            <p class="mb-1">
                                                                {{ $authUser->name }} melakukan
                                                                pembelian paket Point Blank Zepetto 1
                                                                Hari.
                                                            </p>
                                                        </a> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body pt-0">
                                                        <p><b class="fs-italic">Screenshot bukti
                                                                pendaftaran ini dan berikan
                                                                kepada pembeli sebagai bukti
                                                                valid.</b></p>
                                                        <div id="preview-container" class="d-none"></div>
                                                        <button class="btn btn-primary btn-sm"
                                                            id="capture-button">Screenshot</button>
                                                        <a id="download-button"
                                                            class="btn btn-success btn-sm d-none">Download
                                                            screenshot</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- CARD SELESAI TAMBAH USER --}}
                                    </div>

                                    {{-- RIWAYAT TRANSAKSI --}}
                                    {{-- <div class="col-lg-6">
                                    <h4 class="card-title mb-4">Riwayat terakhir</h4>
                                    <div class="list-group">

                                        <p class="text-center">Tidak ada riwayat.</p>

                                        <a href="#"
                                            class="list-group-item list-group-item-action active">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1 text-white">
                                                    {{ $authUser->name }}</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">
                                                {{ $authUser->name }} telah mendaftarkan user
                                                piotestresseler dengan level resseler.
                                            </p>
                                        </a>

                                    </div>
                                </div> --}}
                                    {{-- END RIWAYAT TRANSAKSI --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

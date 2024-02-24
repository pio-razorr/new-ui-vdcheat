@extends('user.layout.main')

@section('title', 'Profile')

@section('content-body')
    <section class="section">
        <div class="row">

            <div class="col-sm-6">
                {{-- CARD INFORMASI AKUN --}}
                <div class="card" data-aos="zoom-in" data-aos-duration="500">
                    <div class="card-body">
                        <h4 class="card-title">Informasi</h4>
                        <p class="card-text">
                            1. Isi dengan bijak.
                        </p>
                        <p class="card-text">
                            2. Nomor hp anda akan digunakan sebagai link whatsapp di landing page.
                        </p>
                        <hr>
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            {{-- <div class="avatar avatar-xl">
                                <img src="./assets/compiled/jpg/2.jpg" alt="Avatar">
                            </div>
                            <h3 class="mt-3">{{ $authUser->name }}</h3>
                            <p class="mt-3">
                                @if ($authUser->role == 'resseler' && $authUser->saldo <= 10000000)
                                    Resseler
                                @elseif ($authUser->role == 'resseler' && $authUser->saldo >= 10000000)
                                    Resseler VIP
                                @elseif ($authUser->role == 'admin')
                                    Admin
                                @elseif ($authUser->role == 'ceo')
                                    CEO
                                @endif
                            </p> --}}
                        </div>
                        <form action="/profil" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama" value="{{ $authUser->name }}">
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder=""
                                    value="{{ $authUser->username }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control"
                                    placeholder="Masukkan nomor hp"
                                    value="{{ '0' . preg_replace('/^62/', '', $authUser->no_hp) }}">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- END CARD INFORMASI AKUN --}}
            </div>

            <div class="col-sm-6">
                {{-- CARD GANTI PASSWORD --}}
                <div class="card" data-aos="zoom-in" data-aos-duration="550">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Informasi</h4>
                            <p class="card-text">
                                Harap berhati hati saat mengganti password, kesalahan input bukan tanggung jawab admin.
                            </p>
                            <hr>
                            <form class="form" action="/ganti-password" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="password-lama" class="sr-only">Password lama</label>
                                        <input type="text" id="password-lama" class="form-control"
                                            placeholder="Masukkan password lama" value="{{ old('password_lama') }}"
                                            name="password_lama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-baru" class="sr-only">Password baru</label>
                                        <input type="text" id="password-baru" class="form-control"
                                            placeholder="Masukkan password baru" value="{{ old('password_baru') }}"
                                            name="password_baru" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ulangi-password-baru" class="sr-only">Ulangi password
                                            baru</label>
                                        <input type="text" id="ulangi-password-baru" class="form-control"
                                            placeholder="Masukkan password baru" value="{{ old('ulangi_password_baru') }}"
                                            name="ulangi_password_baru" required>
                                    </div>
                                </div>
                                <div class="form-actions mt-4">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- END CARD GANTI PASSWORD --}}
            </div>

            <div class="col-sm-6">
                {{-- CARD SOCIAL MEDIA --}}
                <div class="card" data-aos="zoom-in" data-aos-duration="550">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Informasi</h4>
                            <p class="card-text">
                                1. Data social media ini akan ditampilkan di halaman landing page.
                            </p>
                            <p class="card-text">
                                2. Masukkan link profil instagram dan facebook anda.
                            </p>
                            <hr>
                            <form class="form" action="/profil-sosmed" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control"
                                            placeholder="Masukkan username instagram" value="{{ $authUser->instagram }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control"
                                            placeholder="Masukkan nama facebook" value="{{ $authUser->facebook }}">
                                    </div>
                                </div>
                                <div class="form-actions mt-4">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- END CARD SOCIAL MEDIA --}}
            </div>

        </div>
    </section>
@endsection

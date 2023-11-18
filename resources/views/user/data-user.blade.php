<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">

        @include('layout.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="row" data-aos="zoom-in">
                    <div class="col-6">
                        <h3>Data user</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ $authUser->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{ $authUser->role }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src={{ asset('assets-pio/img/alvin-cheat.png') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
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
                                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                href="#home" role="tab" aria-controls="home"
                                                aria-selected="true">Data user</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                                role="tab" aria-controls="profile" aria-selected="false"
                                                tabindex="-1">Tambah user</a>
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
                                                                        @if ($user->role == 'resseler' && $user->expired_date && \Carbon\Carbon::parse($user->expired_date)->year <= 2100)
                                                                            Resseler VIP
                                                                        @elseif ($user->role == 'resseler')
                                                                            Resseler
                                                                        @elseif ($user->role == 'admin')
                                                                            Admin
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $user->name }}</td>
                                                                    <td>{{ $user->username }}</td>
                                                                    <td>{{ $user->no_hp }}</td>
                                                                    <td>
                                                                        @if ($user->role == 'resseler')
                                                                            <span class="badge bg-success">AKTIF</span>
                                                                        @elseif ($user->role == 'admin')
                                                                            @if (strtotime($user->expired_date) < time())
                                                                                <span class="badge bg-danger">TIDAK
                                                                                    AKTIF</span>
                                                                            @else
                                                                                <span
                                                                                    class="badge bg-success">AKTIF</span>
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
                                                                        <form action="{{ '/data-user/' . $user->id }}"
                                                                            method="POST" class="delete-form">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-outline-danger"
                                                                                data-confirm-delete="true">
                                                                                <i class="bi bi-trash"></i>
                                                                            </button>
                                                                        </form>

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
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
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
                                                    <form id="tambah-user-form" class="form" action="#"
                                                        method="post">
                                                        @csrf
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <label for="name">Nama</label>
                                                                    <input type="text" class="form-control"
                                                                        id="name" placeholder="Masukkan nama"
                                                                        name="name" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <input type="text" class="form-control"
                                                                        id="username" placeholder="Masukkan username"
                                                                        name="username" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="password" placeholder="Masukkan password"
                                                                        name="password" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="no-hp">Nomor Hp</label>
                                                                    <input type="number" class="form-control"
                                                                        id="no-hp" placeholder="Masukkan nomor hp"
                                                                        name="no_hp" required>
                                                                </div>

                                                                <fieldset class="form-group">
                                                                    <label for="level-akun">Level</label>
                                                                    <select class="form-select" id="level-akun"
                                                                        name="role" required>
                                                                        <option value="" selected>Pilih level
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
                                                            <button type="submit"
                                                                class="btn btn-primary">Daftar</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <hr class="my-4 d-block d-md-none">

                                                <div class="col-lg-6">
                                                    {{-- CARD SELESAI TAMBAH USER --}}
                                                    @if (Session::get('success-pendaftaran'))
                                                        <div class="card mb-0" id="card-screenshot"
                                                            data-aos="zoom-in" data-aos-duration="1000">
                                                            {{-- <div class="card-header">
                                                                <h4 class="card-title"><i
                                                                        class="bi bi-check2-all me-2"></i>Alvin Cheat -
                                                                    Pembelian Cheat</h4>
                                                            </div> --}}
                                                            <div class="card-content">
                                                                <div class="card-body pb-0">
                                                                    <div
                                                                        class="alert alert-light-success color-success">
                                                                        <i class="bi bi-check-circle me-2"></i>Devil
                                                                        Cheat - Pendaftaran akun.
                                                                    </div>
                                                                    <div class="list-group">

                                                                        <ul class="list-group">

                                                                            <li class="list-group-item">
                                                                                <div class="row">
                                                                                    <div class="col-4">
                                                                                        <i
                                                                                            class="bi bi-person-vcard me-1"></i>
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
                                                                                        <i
                                                                                            class="bi bi-person-circle me-1"></i>
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
                                                                                        <i
                                                                                            class="bi bi-controller me-1"></i>
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
                                                                                        <i
                                                                                            class="bi bi-database me-1"></i>
                                                                                        Level
                                                                                    </div>
                                                                                    <div class="col-9 text-end">
                                                                                        {{ session('data.role') }}
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li class="list-group-item">
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <i
                                                                                            class="bi bi-box-seam me-1"></i>
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
                                                                                        <i
                                                                                            class="bi bi-calendar-event me-1"></i>
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
                                                                                        <i
                                                                                            class="bi bi-calendar-x me-1"></i>
                                                                                        Link login
                                                                                    </div>
                                                                                    <div class="col-6 text-end">
                                                                                        https://www.xnxx.com/
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
            </div>

            @include('layout.footer')
        </div>

    </div>

    @include('layout.script')

    @include('sweetalert::alert')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            // Cek jika ada pesan sukses-pendaftaran, tampilkan tab "Tambah user"
            if ('{{ Session::get('success-pendaftaran') }}') {
                // Atur tab "Tambah user" sebagai tab aktif
                $('#profile-tab').tab('show');
            }

            // Atur handler untuk form submission
            $('#tambah-user-form').submit(function() {
                // Atur tab "Tambah user" sebagai tab aktif setelah formulir dikirim
                $('#profile-tab').tab('show');
            });
        });
    </script>

    {{-- Inisialisasi DataTable --}}
    <script>
        $(document).ready(function() {
            $('#data-user').DataTable();
        });
    </script>

    {{-- Sweet alert konfirmasi tombol hapus --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteForms = document.querySelectorAll(".delete-form");

            deleteForms.forEach((form) => {
                form.addEventListener("submit", function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: "Anda yakin ?",
                        text: "Data user akan dihapus secara permanen",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Ya, hapus !"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form
                                .submit(); // Lanjutkan dengan mengirimkan formulir jika pengguna mengonfirmasi
                        }
                    });
                });
            });
        });
    </script>

    {{-- HTML2 Canvas screenshot --}}
    <script>
        const container = document.getElementById("card-screenshot");
        const captureButton = document.getElementById("capture-button");
        const previewContainer = document.getElementById("preview-container");
        const downloadButton = document.getElementById("download-button");

        captureButton.addEventListener("click", async () => {
            downloadButton.classList.remove("d-none");
            const canvas = await html2canvas(container);
            const imageURL = canvas.toDataURL();
            previewContainer.innerHTML = `<img src="${imageURL}" id="image">`;
            downloadButton.href = imageURL;
            downloadButton.download = "image.png";
        });

        window.onload = () => {
            downloadButton.classList.add("d-none");
            previewContainer.innerHTML = "";
        };
    </script>

    <script>
        AOS.init();
    </script>

</body>

</html>

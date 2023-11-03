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
                                    <img src="./assets/compiled/jpg/1.jpg">
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

                                    @if (Session::get('success'))
                                        <div class="alert alert-success alert-dismissible show fade my-4">
                                            {{ Session::get('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="tab-content my-4" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Level</th>
                                                            <th>Nama</th>
                                                            <th>Username</th>
                                                            <th>No. Hp</th>
                                                            <th>Status</th>
                                                            <th>Saldo</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($allUsers as $user)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $user->role }}</td>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->username }}</td>
                                                                <td>{{ $user->no_hp }}</td>
                                                                <td><span class="badge bg-success">Active</span></td>
                                                                <td>{{ $user->saldo }}</td>
                                                                <td>
                                                                    <form action="{{ '/data-user/' . $user->id }}" onsubmit="return confirm('Yakin ingin hapus data ?')"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit "
                                                                            class="btn btn-sm btn-outline-danger">
                                                                            <i class="bi bi-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
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
                                                    <form class="form" action="#" method="post">
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

                                                                        <option>Resseler</option>

                                                                        @if (Auth::user()->role == 'ceo')
                                                                            <option>Admin</option>
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

                                                {{-- RIWAYAT TRANSAKSI --}}
                                                <div class="col-lg-6">
                                                    <h4 class="card-title mb-4">Riwayat terakhir</h4>
                                                    <div class="list-group">

                                                        {{-- <p class="text-center">Tidak ada riwayat.</p> --}}

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
                                                </div>
                                                {{-- END RIWAYAT TRANSAKSI --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="./assets/compiled/jpg/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">John Duck</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./assets/compiled/jpg/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./assets/compiled/jpg/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="./assets/compiled/jpg/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div> --}}

                </section>
            </div>

            @include('layout.footer')
        </div>

    </div>

    @include('layout.script')

    <script>
        AOS.init();
    </script>

</body>

</html>

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
                        <h3>Transaksi</h3>
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

                    {{-- TRANSAKSI --}}
                    <div class="col-lg-6">
                        <div class="card" data-aos="zoom-in" data-aos-duration="500">
                            {{-- <div class="card-header">
                                <h5 class="card-title">Data User</h5>
                            </div> --}}
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Transaksi baru</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false"
                                            tabindex="-1">Perpanjang</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">

                                    {{-- TRANSAKSI BARU --}}
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <h4 class="card-title mb-4">Informasi</h4>
                                        <p class="card-text">
                                            Segala bentuk kesalahan penginputan data merupakan resiko seller, mohon
                                            teliti sebelum melakukan pembelian.
                                        </p>
                                        <hr>
                                        <form class="form" action="#" method="post">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Nama" required>
                                                </div>

                                                <fieldset class="form-group">
                                                    <label for="game">Game</label>
                                                    <select class="form-select" id="game" required>
                                                        <option value="" selected>Pilih</option>

                                                        <option>Mobile Legends</option>
                                                        <option>Point Blank Zepetto</option>
                                                        <option>Point Blank Private Server</option>

                                                    </select>
                                                </fieldset>

                                                <div class="form-group">
                                                    <label for="serial">Serial</label>
                                                    <input type="text" class="form-control" id="serial"
                                                        placeholder="Serial" required>
                                                </div>

                                                <fieldset class="form-group">
                                                    <label for="paket">Paket</label>
                                                    <select class="form-select" id="paket" required>
                                                        <option value="" selected>Pilih</option>

                                                        <option>1 Hari - Potongan saldo Rp. 5.000</option>
                                                        <option>3 + 1 Hari - Potongan saldo Rp. 12.500</option>
                                                        <option>7 + 2 Hari - Potongan saldo Rp. 25.000</option>
                                                        <option>30 + 5 Hari - Potongan saldo Rp. 50.000</option>

                                                    </select>
                                                </fieldset>

                                            </div>
                                            <div class="form-actions mt-4">
                                                <button type="submit" class="btn btn-primary me-1">Beli</button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- END TRANSAKSI BARU --}}

                                    {{-- PERPANJANG --}}
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <h4 class="card-title mb-4">Informasi</h4>
                                        <p class="card-text">
                                            Segala bentuk kesalahan penginputan data merupakan resiko seller, mohon
                                            teliti
                                            sebelum melakukan submit.
                                        </p>
                                        <hr>
                                        <form class="form" action="#" method="post">
                                            <div class="form-body">

                                                <div class="form-group">
                                                    <label for="member-id">Member ID</label>
                                                    <input type="text" class="form-control" id="member-id"
                                                        placeholder="Masukkan member id">
                                                </div>

                                                <div class="form-group">
                                                    <label for="info-member">Info Member</label>
                                                    <input type="text" class="form-control" id="info-member"
                                                        placeholder="Akiel | Mobile Legends" disabled>
                                                </div>

                                                <fieldset class="form-group">
                                                    <label for="game">Paket</label>
                                                    <select class="form-select" id="game">
                                                        <option selected>Pilih</option>

                                                        <option>1 Hari - Potongan saldo Rp. 5.000</option>
                                                        <option>3 + 1 Hari - Potongan saldo Rp. 12.500</option>
                                                        <option>7 + 2 Hari - Potongan saldo Rp. 25.000</option>
                                                        <option>30 + 5 Hari - Potongan saldo Rp. 50.000</option>

                                                    </select>
                                                </fieldset>

                                            </div>
                                            <div class="form-actions mt-4">
                                                <button type="submit"
                                                    class="btn btn-primary me-1">Perpanjang</button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- END PERPANJANG --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END TRANSAKSI --}}

                    {{-- RIWAYAT TRANSAKSI --}}
                    <div class="col-lg-6">
                        <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="card-header">
                                <h4 class="card-title">Riwayat terakhir</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <div class="list-group">

                                        {{-- <p class="text-center">Tidak ada riwayat.</p> --}}

                                        <a href="#" class="list-group-item list-group-item-action active">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1 text-white">
                                                    {{ $authUser->name }}</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">
                                                {{ $authUser->name }} melakukan pembelian paket Point Blank Zepetto 1 Hari.
                                            </p>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END RIWAYAT TRANSAKSI --}}

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

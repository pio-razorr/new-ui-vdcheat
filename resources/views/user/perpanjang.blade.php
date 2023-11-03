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
                <div class="row">
                    <div class="col-6">
                        <h3>Transaksi baru</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-0 text-gray-600">Iqhwan Caboel</h6>
                                        <p class="mb-0 text-sm text-gray-600">Seller pedo</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="./assets/compiled/jpg/1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                                style="min-width: 11rem;">
                                {{-- <li>
                                    <h6 class="dropdown-header">Hello, John!</h6>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i>
                                        My
                                        Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                        Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                        Wallet</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li> --}}
                                <li>
                                    <a class="dropdown-item" href="#"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <section class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Perpanjang</h4>
                                    <p class="card-text">
                                        Segala bentuk kesalahan penginputan data merupakan resiko seller, mohon teliti
                                        sebelum melakukan submit.
                                    </p>
                                    <form class="form" action="#" method="post">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="member-id">Member ID</label>
                                                <input type="text" class="form-control" id="member-id"
                                                    placeholder="Masukkan member id">
                                            </div>

                                            <fieldset class="form-group">
                                                <label for="game">Game</label>
                                                <select class="form-select" id="game">
                                                    <option selected>Pilih</option>
                                                    <option disabled></option>

                                                    <option>Mobile Legends 1 Hari - Rp. 5.000</option>
                                                    <option>Mobile Legends 3 + 1 Hari - Rp. 12.500</option>
                                                    <option>Mobile Legends 7 + 2 Hari - Rp. 25.000</option>
                                                    <option>Mobile Legends 30 + 5 Hari - Rp. 50.000</option>

                                                    <option disabled></option>

                                                    <option>Point Blank Zepetto 1 Hari - Rp. 5.000</option>
                                                    <option>Point Blank Zepetto 3 + 1 Hari - Rp. 12.500</option>
                                                    <option>Point Blank Zepetto 7 + 2 Hari - Rp. 25.000</option>
                                                    <option>Point Blank Zepetto 30 + 5 Hari - Rp. 50.000</option>

                                                    <option disabled></option>

                                                    <option>Point Blank Private 3 + 1 Hari - Rp. 12.500</option>
                                                    <option>Point Blank Private 7 + 2 Hari - Rp. 25.000</option>
                                                    <option>Point Blank Private 30 + 5 Hari - Rp. 50.000</option>
                                                </select>
                                            </fieldset>

                                        </div>
                                        <div class="form-actions mt-4">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        </div>
                                    </form>
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

</body>

</html>

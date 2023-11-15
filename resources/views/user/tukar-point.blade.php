<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    <script src="{{asset('assets/static/js/initTheme.js')}}"></script>
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
                        <h3>Tukar point</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ $authUser->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{ $authUser->role }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src={{ asset('assets-pio/img/alvin-cheat.png') }} />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <section class="row">

                    {{-- CARD TUKAR POINT --}}
                    <div class="col-lg-6">
                        <div class="card" data-aos="zoom-in" data-aos-duration="500">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Informasi</h4>
                                    <p class="card-text">
                                        Penukaran point memiliki rate 1:1. Point yang ditukar sama dengan saldo yang
                                        akan di dapatkan.
                                    </p>
                                    <form class="form" method="post">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="saldo">Saldo</label>
                                                <input type="text" class="form-control" id="saldo" placeholder="{{ $authUser->saldo }}" disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="point">Total point</label>
                                                <input type="text" class="form-control" id="point" placeholder="{{ $authUser->point }}" disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="nominal-tukar" class="sr-only">Nominal tukar</label>
                                                <input type="text" id="nominal-tukar" class="form-control"
                                                    placeholder="Nominal tukar" name="LastName">
                                            </div>
                                        </div>
                                        <div class="form-actions mt-4">
                                            <button type="submit" class="btn btn-primary">Tukar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- CARD TUKAR POINT --}}

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
                                                <h5 class="mb-1 text-white">Point Blank Zepetto</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">
                                                Anda telah melakukan perpanjangan paket 3 hari dengan member id
                                                ML-51325324
                                            </p>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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

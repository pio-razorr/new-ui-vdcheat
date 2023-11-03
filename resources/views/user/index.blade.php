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
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{$authUser->name}}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{$authUser->role}}</p>
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

                        {{-- INFORMASI SALDO, TRANSAKSI, POINT, PENDAPATAN --}}
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Sisa saldo</h6>
                                                <h6 class="font-extrabold mb-0">{{ $authUser->saldo }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
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
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon green mb-2">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Point</h6>
                                                <h6 class="font-extrabold mb-0">{{ $authUser->point }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Pendapatan</h6>
                                                <h6 class="font-extrabold mb-0">{{ $authUser->pendapatan }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                            {{ $authUser->role }}
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
                                                            {{ $authUser->no_hp }}
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
                                                            0 Member
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item mb-2">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <i class="bi bi-calendar-event me-1"></i>
                                                            Masa berlaku
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            -
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        {{-- <img class="img-fluid w-100" src="./assets/compiled/jpg/banana.jpg" alt="Card image cap"> --}}
                                    </div>
                                    {{-- <div class="card-footer d-flex justify-content-between">
                                            <span>Card Footer</span>
                                            <button class="btn btn-light-primary">Read More</button>
                                        </div> --}}
                                </div>
                                {{-- END INFORMASI AKUN --}}

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

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Mobile Legends
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <span class="badge bg-success">AKTIF</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item my-2">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Point Blank
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <span class="badge bg-danger">MAINTENANCE</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Point Blank Private
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <span class="badge bg-success">AKTIF</span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        {{-- <img class="img-fluid w-100" src="./assets/compiled/jpg/banana.jpg" alt="Card image cap"> --}}
                                    </div>
                                    {{-- <div class="card-footer d-flex justify-content-between">
                                                <span>Card Footer</span>
                                                <button class="btn btn-light-primary">Read More</button>
                                            </div> --}}
                                </div>
                                {{-- END STATUS CHEAT --}}

                            </div>

                            <div class="col-lg-6">

                                {{-- RIWAYAT TRANSAKSI --}}
                                <div class="card" data-aos="zoom-in" data-aos-duration="2500">
                                    <div class="card-header">
                                        <h4 class="card-title">Riwayat terakhir</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <div class="list-group">

                                                <p class="text-center">Tidak ada riwayat.</p>

                                                {{-- <a href="#"
                                                    class="list-group-item list-group-item-action active">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1 text-white">Point Blank Zepetto</h5>
                                                        <small>3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">
                                                        Anda telah melakukan perpanjangan paket 3 hari dengan member id
                                                        ML-51325324
                                                    </p>
                                                </a>

                                                <a href="#" class="list-group-item list-group-item-action my-2">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">Point Blank Zepetto</h5>
                                                        <small>3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">
                                                        Anda telah melakukan perpanjangan paket 3 hari dengan member id
                                                        ML-51325324
                                                    </p>
                                                </a>

                                                <a href="#"
                                                    class="list-group-item list-group-item-action active">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1 text-white">Point Blank Zepetto</h5>
                                                        <small>3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">
                                                        Anda telah melakukan perpanjangan paket 3 hari dengan member id
                                                        ML-51325324
                                                    </p>
                                                </a> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- END RIWAYAT TRANSAKSI --}}

                            </div>

                        </div>

                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32"
                                                        fill="blue" style="width:10px">
                                                        <use
                                                            xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <h5 class="mb-0 text-end">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="./assets/compiled/jpg/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="./assets/compiled/jpg/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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

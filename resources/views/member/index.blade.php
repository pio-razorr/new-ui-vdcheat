<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
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
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ $authMember->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">Akun member</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src={{ asset('assets-pio/img/logo-dc.png') }} />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <section class="row">

                    <div class="col-lg-6">

                        {{-- INFORMASI MEMBER --}}
                        <div class="card" data-aos="zoom-in">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Informasi Member</h4>
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
                                                    {{ $authMember->name }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item mb-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-person-circle me-1"></i>
                                                    Member ID
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ $authMember->member_id }}
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item active">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-bookmark me-1"></i>
                                                    Tipe
                                                </div>
                                                <div class="col-6 text-end">
                                                    Personal
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item mb-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-controller me-1"></i>
                                                    Game
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ $authMember->game }}
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item active">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-bookmark me-1"></i>
                                                    Status
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if (strtotime($authMember->expired_date) < time())
                                                        <span class="badge bg-danger">TIDAK AKTIF</span>
                                                    @else
                                                        <span class="badge bg-success">AKTIF</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item mb-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-calendar-event me-1"></i>
                                                    Tgl. Expired
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ $authMember->expired_date }}
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item active">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-clock me-1"></i>
                                                    Sisa Durasi
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if (strtotime($authMember->expired_date) < time())
                                                        -
                                                    @else
                                                        {{ $remainingDuration }}
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        @if ($authMember->game == 'Point Blank Zepetto' || $authMember->game == 'Point Blank Private')
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <i class="bi bi-database me-1"></i>
                                                        Serial Aktif
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        {{ $authMember->serial }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="card-footer d-flex justify-content-between">
                                    <span>Card Footer</span>
                                    <button class="btn btn-light-primary">Read More</button>
                                </div> --}}
                        </div>
                        {{-- END INFORMASI MEMBER --}}

                        {{-- REDEEM VOUCHER --}}
                        <div class="card" data-aos="zoom-in">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Redeem Voucher</h4>
                                    <p class="card-text">
                                        Voucher akan menambahkan durasi member Anda.
                                    </p>
                                    <form class="form" action="#" method="post">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="kode-voucher" class="sr-only">Kode Voucher</label>
                                                <input type="text" id="kode-voucher" class="form-control"
                                                    placeholder="Masukkan Kode Voucher" name="kode-voucher" disabled>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary me-1">Redeem</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- END REDEEM VOUCHER --}}

                    </div>

                    <div class="col-lg-6">

                        {{-- STATUS CHEAT --}}
                        <div class="card" data-aos="zoom-in">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Status Cheat</h4>
                                    {{-- <p class="card-text">
                                        Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll.
                                        Toffee
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
                            </div>
                            {{-- <div class="card-footer d-flex justify-content-between">
                                <span>Card Footer</span>
                                <button class="btn btn-light-primary">Read More</button>
                            </div> --}}
                        </div>
                        {{-- END STATUS CHEAT --}}

                        {{-- UBAH SERIAL --}}
                        @if ($authMember->game == 'Point Blank Zepetto' || $authMember->game == 'Point Blank Private')
                            <div class="card" data-aos="zoom-in">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Ubah Serial</h4>
                                        <p class="card-text">
                                            Ubah serial digunakan jika Anda ingin menggunakan cheat pada perangkat PC
                                            yang
                                            berbeda.
                                        </p>

                                        <form class="form" action="{{ '/dashboard-member/' . $authMember->id }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="serial-aktif">Serial aktif</label>
                                                    <input type="text" class="form-control" id="serial-aktif"
                                                        placeholder="{{ $authMember->serial }}" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="serial-baru" class="sr-only">Serial baru</label>
                                                    <input type="text" id="serial-baru" class="form-control"
                                                        placeholder="Masukkan Serial Baru" name="serial" required>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary me-1">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- END UBAH SERIAL --}}

                    </div>

                </section>
            </div>

            @include('layout.footer')
        </div>

    </div>

    @include('layout.script')

    @include('sweetalert::alert')

    <script>
        AOS.init();
    </script>

</body>

</html>

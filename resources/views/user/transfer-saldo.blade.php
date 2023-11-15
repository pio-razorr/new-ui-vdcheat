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
                <div class="row" data-aos="zoom-in">
                    <div class="col-6">
                        <h3>Transfer saldo</h3>
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

                                    {{-- @if (Session::get('success'))
                                        <div class="alert alert-success alert-dismissible show fade my-4">
                                            {{ Session::get('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif --}}

                                    {{-- @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible show fade">
                                            Username yang dituju tidak ada.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif --}}

                                    <hr>

                                    <form class="form" method="post">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="username-tujuan">Username tujuan</label>
                                                <input type="text" class="form-control" id="username-tujuan"
                                                    placeholder="Masukkan username" value="{{ old('username') }}"
                                                    name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nominal-transfer">Nominal transfer</label>
                                                <input type="number" class="form-control" id="nominal-transfer"
                                                    placeholder="Masukkan nominal transfer" value="{{ old('saldo') }}"
                                                    name="saldo" required>
                                            </div>
                                        </div>
                                        <div class="form-actions mt-4">
                                            <button type="submit" class="btn btn-primary">Transfer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END CARD TRANSFER SALDO --}}

                    <div class="col-lg-6">
                        {{-- CARD SELESAI TRANSFER SALDO --}}
                        @if (Session::get('success-transfer-saldo'))
                            <div class="card mb-0" id="card-screenshot" data-aos="zoom-in" data-aos-duration="1000">
                                {{-- <div class="card-header">
                            <h4 class="card-title"><i class="bi bi-check2-all me-2"></i>Alvin Cheat - Pembelian Cheat</h4>
                        </div> --}}
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="alert alert-light-success color-success"><i
                                                class="bi bi-check-circle me-2"></i>Alvin Cheat - Transfer Saldo.
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
                                                            {{ session('session.nominal-transfer') }}
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
                                                <p>Saldo telah terkirim ke kontolodon</p>
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
                        {{-- CARD SELESAI TRANSFER SALDO --}}
                    </div>


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
                                                <h5 class="mb-1 text-white">
                                                    {{ $authUser->name }}</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">
                                                Transfer saldo 999.999 oleh {{ $authUser->name }} untuk piotestresseler.
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

    @include('sweetalert::alert')

    <script>
        AOS.init();
    </script>

    {{-- HTML 2 Canvas screenshot --}}
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

</body>

</html>

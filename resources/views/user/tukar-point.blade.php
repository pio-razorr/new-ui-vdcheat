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
                                    <form class="form" action="/tukar-point" method="post">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="saldo">Saldo</label>
                                                <input type="text" class="form-control" id="saldo"
                                                    placeholder="{{ $authUser->saldo }}" disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="point">Total point</label>
                                                <input type="text" class="form-control" id="point"
                                                    placeholder="{{ $authUser->point }}" disabled="">
                                            </div>
                                            <div class="form-group">
                                                <label for="nominal-tukar" class="sr-only">Nominal tukar</label>
                                                <input type="text" id="nominal-tukar" class="form-control"
                                                    placeholder="Nominal tukar" name="nominal_tukar" required>
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

                    <div class="col-lg-6">
                        {{-- CARD SELESAI TAMBAH USER --}}
                        @if (Session::get('success-tukar-point'))
                            <div class="card mb-0" id="card-screenshot" data-aos="zoom-in" data-aos-duration="1000">
                                {{-- <div class="card-header">
                                    <h4 class="card-title"><i
                                            class="bi bi-check2-all me-2"></i>Alvin Cheat -
                                        Pembelian Cheat</h4>
                                </div> --}}
                                <div class="card-content">
                                    <div class="card-body pb-0">
                                        <div class="alert alert-light-success color-success">
                                            <i class="bi bi-check-circle me-2"></i>Devil
                                            Cheat - Tukar Point.
                                        </div>
                                        <div class="list-group">

                                            <ul class="list-group">

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <i class="bi bi-person-vcard me-1"></i>
                                                            Saldo sebelum
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            {{ session('saldo-sebelum') }}
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <i class="bi bi-person-vcard me-1"></i>
                                                            Saldo sesudah
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            {{ session('data.saldo') }}
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <i class="bi bi-box-seam me-1"></i>
                                                            Nominal tukar
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            {{ session('nominal-tukar') }}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item mb-2">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <i class="bi bi-coin me-1"></i>
                                                            Tgl. Penukaran
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            {{ session('data.created_at') }}
                                                        </div>
                                                    </div>
                                                </li>

                                                <p>Terima kasih telah menukarkan point ❤</p>

                                                <div class="card">
                                                    <div class="card-content">
                                                        <p><b class="fs-italic">Screenshot bukti
                                                                penukaran point ini sebagai bukti yang
                                                                valid.</b></p>
                                                        <div id="preview-container" class="d-none"></div>
                                                        <button class="btn btn-primary btn-sm"
                                                            id="capture-button">Screenshot</button>
                                                        <a id="download-button"
                                                            class="btn btn-success btn-sm d-none">Download
                                                            screenshot</a>
                                                    </div>
                                                </div>

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
                        @endif
                        {{-- CARD SELESAI TAMBAH USER --}}
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

    @include('sweetalert::alert')

    <script>
        AOS.init();
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

</body>

</html>

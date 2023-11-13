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
                                    <img src={{ asset('assets-pio/img/logo-dc.png') }} />
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
                                        <a class="nav-link {{ !$dataMember['perpanjang'] ? 'active' : '' }}"
                                            id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                            aria-controls="home"
                                            aria-selected="{{ !$dataMember['perpanjang'] }}">Transaksi baru</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link {{ $dataMember['perpanjang'] ? 'active' : '' }}"
                                            id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                            aria-controls="profile" aria-selected="{{ $dataMember['perpanjang'] }}"
                                            tabindex="-1">Perpanjang</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">

                                    {{-- TRANSAKSI BARU --}}
                                    <div class="tab-pane fade {{ !$dataMember['perpanjang'] ? 'show active' : '' }}"
                                        id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h4 class="card-title mb-4">Informasi</h4>
                                        <p class="card-text">
                                            Segala bentuk kesalahan penginputan data merupakan resiko seller, mohon
                                            teliti sebelum melakukan pembelian.
                                        </p>
                                        <hr>
                                        <form class="form" action="#" method="post">
                                            @csrf
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        placeholder="Nama" name="name" required>
                                                </div>

                                                <fieldset class="form-group">
                                                    <label for="game">Game</label>
                                                    <select class="form-select" id="game" name="game" required>
                                                        <option selected>Pilih</option>
                                                        <option value="Mobile Legends">Mobile Legends</option>
                                                        <option value="Point Blank Zepetto">Point Blank Zepetto</option>
                                                        <option value="Point Blank Private">Point Blank Private Server
                                                        </option>
                                                    </select>
                                                </fieldset>

                                                <div class="form-group" id="serial-group" style="display: none;">
                                                    <label for="serial">Serial</label>
                                                    <input type="text" class="form-control" id="serial"
                                                        placeholder="Serial" name="serial" required>
                                                </div>

                                                <fieldset class="form-group" id="paket-group" style="display: none;">
                                                    <label for="paket">Paket</label>
                                                    <select class="form-select" id="paket" name="paket" required>
                                                        <option selected>Pilih</option>
                                                        <option value="1">1 Hari - Potongan saldo Rp. 5.000
                                                        </option>
                                                        <option value="4">3 + 1 Hari - Potongan saldo Rp. 12.500
                                                        </option>
                                                        <option value="9">7 + 2 Hari - Potongan saldo Rp. 25.000
                                                        </option>
                                                        <option value="35">30 + 5 Hari - Potongan saldo Rp. 50.000
                                                        </option>
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
                                    <div class="tab-pane fade {{ $dataMember['perpanjang'] ? 'show active' : '' }}"
                                        id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <h4 class="card-title mb-4">Informasi</h4>
                                        <p class="card-text">
                                            Segala bentuk kesalahan penginputan data merupakan resiko seller, mohon
                                            teliti
                                            sebelum melakukan submit.
                                        </p>

                                        <hr>

                                        <form class="form" action="/transaksi" method="get">
                                            <div class="form-body">
                                                <label for="member-id">Member ID</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukkan member id" name="member_id"
                                                        id="member-id" value="{{ $dataMember['input_member'] }}"
                                                        required>
                                                    <button class="btn btn-primary" type="submit">Cek</button>
                                                </div>
                                        </form>

                                        <div class="form-group">
                                            <label for="info-member">Info Member</label>
                                            <input type="text" class="form-control" id="info-member"
                                                placeholder="-" value="{{ $dataMember['pesan'] }}" disabled>
                                        </div>

                                        <form action="/transaksi/{{ $dataMember['member_id'] }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="member_id"
                                                value="{{ $dataMember['member_id'] }}">
                                            <fieldset class="form-group">
                                                <label for="paket">Paket</label>
                                                <select class="form-select" id="paket" name="paket" required>
                                                    <option value="" selected>Pilih</option>

                                                    <option value="1">1 Hari - Potongan saldo Rp. 5.000
                                                    </option>
                                                    <option value="4">3 + 1 Hari - Potongan saldo Rp. 12.500
                                                    </option>
                                                    <option value="9">7 + 2 Hari - Potongan saldo Rp. 25.000
                                                    </option>
                                                    <option value="35">30 + 5 Hari - Potongan saldo Rp. 50.000
                                                    </option>

                                                </select>
                                            </fieldset>

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
                    
            </div>
            {{-- END TRANSAKSI --}}


            <div class="col-lg-6">

                {{-- CARD SELESAI TRANSAKSI BARU --}}
                @if (Session::get('success-transaksi'))
                    <div class="card mb-0" id="card-screenshot" data-aos="zoom-in" data-aos-duration="1000">
                        {{-- <div class="card-header">
                                <h4 class="card-title"><i class="bi bi-check2-all me-2"></i>Devil Cheat - Pembelian Cheat</h4>
                            </div> --}}
                        <div class="card-content">
                            <div class="card-body">
                                <div class="alert alert-light-success color-success"><i
                                        class="bi bi-check-circle me-2"></i>Devil Cheat - Pembelian Cheat.
                                </div>
                                <div class="list-group">

                                    <ul class="list-group">

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-4">
                                                    <i class="bi bi-person-vcard me-1"></i>
                                                    Member key
                                                </div>
                                                <div class="col-8 text-end">
                                                    {{ session('data.member_id') }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-person-circle me-1"></i>
                                                    Pembeli
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
                                                    Game
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('data.game') }}
                                                </div>
                                            </div>
                                        </li>

                                        @if (session('data.serial'))
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <i class="bi bi-database me-1"></i>
                                                        Serial
                                                    </div>
                                                    <div class="col-9 text-end">
                                                        {{ session('data.serial') }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-box-seam me-1"></i>
                                                    Paket
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if (old('paket') == 1)
                                                        1 hari
                                                    @elseif (old('paket') == 4)
                                                        3 + 1 Hari
                                                    @elseif (old('paket') == 9)
                                                        7 + 2 Hari
                                                    @elseif (old('paket') == 35)
                                                        30 + 5 Hari
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-coin me-1"></i>
                                                    Harga
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if (old('paket') == 1)
                                                        Rp. 10.000
                                                    @elseif (old('paket') == 4)
                                                        Rp. 25.000
                                                    @elseif (old('paket') == 9)
                                                        Rp. 50.000
                                                    @elseif (old('paket') == 35)
                                                        Rp. 100.000
                                                    @endif
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-calendar-event me-1"></i>
                                                    Tgl. Pembelian
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('data.created_at') }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-calendar-x me-1"></i>
                                                    Tgl. Expired
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('data.expired_date') }}
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-person me-1"></i>
                                                    Penjual
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ $authUser->name }}
                                                </div>
                                            </div>
                                        </li>

                                        <p>Terima kasih sudah membeli ❤</p>
                                        <p>Login member <a
                                                href="http://www.instagram.com/pio_razorr">http://www.instagram.com/pio_razorr</a>
                                        </p>
                                        <p>Screenshot bukti transaksi ini dan berikan kepada pembeli sebagai bukti
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
                {{-- CARD SELESAI TRANSAKSI BARU --}}

                {{-- CARD SELESAI PERPANJANG --}}
                @if (Session::get('success-perpanjang'))
                    <div class="card mb-0" id="card-screenshot" data-aos="zoom-in" data-aos-duration="1000">
                        {{-- <div class="card-header">
                                <h4 class="card-title"><i class="bi bi-check2-all me-2"></i>Devil Cheat - Pembelian Cheat</h4>
                            </div> --}}
                        <div class="card-content">
                            <div class="card-body">
                                <div class="alert alert-light-success color-success"><i
                                        class="bi bi-check-circle me-2"></i>Devil Cheat - Perpanjang Cheat.
                                </div>
                                <div class="list-group">

                                    <ul class="list-group">

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-4">
                                                    <i class="bi bi-person-vcard me-1"></i>
                                                    Member key
                                                </div>
                                                <div class="col-8 text-end">
                                                    {{ session('data.member_id') }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-person-circle me-1"></i>
                                                    Pemerpanjang
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('name') }}
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-controller me-1"></i>
                                                    Game
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('game') }}
                                                </div>
                                            </div>
                                        </li>

                                        @if (session('data.serial'))
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <i class="bi bi-database me-1"></i>
                                                        Serial
                                                    </div>
                                                    <div class="col-9 text-end">
                                                        {{ session('data.serial') }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-box-seam me-1"></i>
                                                    Paket
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if (old('paket') == 1)
                                                        1 hari
                                                    @elseif (old('paket') == 4)
                                                        3 + 1 Hari
                                                    @elseif (old('paket') == 9)
                                                        7 + 2 Hari
                                                    @elseif (old('paket') == 35)
                                                        30 + 5 Hari
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-coin me-1"></i>
                                                    Harga
                                                </div>
                                                <div class="col-6 text-end">
                                                    @if (old('paket') == 1)
                                                        Rp. 10.000
                                                    @elseif (old('paket') == 4)
                                                        Rp. 25.000
                                                    @elseif (old('paket') == 9)
                                                        Rp. 50.000
                                                    @elseif (old('paket') == 35)
                                                        Rp. 100.000
                                                    @endif
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-calendar-event me-1"></i>
                                                    Tgl. Perpanjang
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('data.updated_at') }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-calendar-x me-1"></i>
                                                    Tgl. Expired
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ session('data.expired_date') }}
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <i class="bi bi-person me-1"></i>
                                                    Penjual
                                                </div>
                                                <div class="col-6 text-end">
                                                    {{ $authUser->name }}
                                                </div>
                                            </div>
                                        </li>

                                        <p>Terima kasih sudah perpanjang ❤</p>
                                        <p>Login member <a
                                                href="http://www.instagram.com/pio_razorr">http://www.instagram.com/pio_razorr</a>
                                        </p>
                                        <p>Screenshot bukti transaksi ini dan berikan kepada pembeli sebagai bukti
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
                {{-- CARD SELESAI PERPANJANG --}}

                {{-- RIWAYAT TRANSAKSI --}}
                {{-- <div class="card" data-aos="zoom-in" data-aos-duration="1000">
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
                                        {{ $authUser->name }} melakukan pembelian paket Point Blank Zepetto 1
                                        Hari.
                                    </p>
                                </a>

                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- END RIWAYAT TRANSAKSI --}}

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

    <script>
        // Mendapatkan referensi elemen dropdown dengan id "game"
        const gameSelect = document.getElementById('game');

        // Mendapatkan referensi elemen inputan serial
        const serialGroup = document.getElementById('serial-group');

        // Mendapatkan referensi elemen inputan paket
        const paketGroup = document.getElementById('paket-group');

        // Menambahkan event listener ke elemen dropdown
        gameSelect.addEventListener('change', function() {
            if (gameSelect.value === 'Mobile Legends') {

                // Jika pengguna memilih "Mobile Legends," sembunyikan inputan serial dan tampilkan inputan paket
                serialGroup.style.display = 'none';
                paketGroup.style.display = 'block';

                // Hilangkan validasi required
                document.querySelector('#serial').removeAttribute('required');

            } else if (gameSelect.value === 'Point Blank Zepetto' || gameSelect.value === 'Point Blank Private') {

                // Jika pengguna memilih "Point Blank Zepetto" atau "Point Blank Private," tampilkan inputan serial dan inputan paket
                serialGroup.style.display = 'block';
                paketGroup.style.display = 'block';

            } else {

                // Untuk pilihan game lain, sembunyikan keduanya
                serialGroup.style.display = 'none';
                paketGroup.style.display = 'none';

            }
        });
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

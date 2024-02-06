@extends('landing-page.layout.main')

@section('hero')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center justify-content-center">
                <div data-aos="zoom-out">
                    <h1 class="mb-4">Selamat datang di <span>VVIP MODS</span></h1>
                    <h2>VVIP MODS adalah program cheat berbayar dengan keunggulan lebih dibanding cheat gratisan
                        atau cheat
                        VIP lainnya. Fitur santai, mudah digunakan, dan resiko banned minimal karena dilengkapi
                        sistem bypass anti
                        auto banned.
                    </h2>
                    <div class="text-center text-lg-start">
                        <a href="https://wa.me/6282220000230" target="_blank"
                            class="btn-get-whatsapp scrollto me-2 mb-2 mb-xl-0"><i
                                class="ri-whatsapp-line me-2"></i>WhatsApp</a>
                        <a href="https://t.me/ALVINCHEATOFC" target="_blank"
                            class="btn-get-telegram scrollto me-2 mb-2 mb-xl-0"><i
                                class="ri-telegram-line me-2"></i>Telegram</a>
                        <a href="https://www.tiktok.com/@xbiruchannel" target="_blank"
                            class="btn-get-tiktok scrollto me-2 mb-2 mb-xl-0"><i class="ri-tiktok-line me-2"></i>Tiktok</a>
                        <a href="https://s.id/channelyt" target="_blank"
                            class="btn-get-youtube scrollto me-2 mb-2 mb-xl-0 mt-xl-2"><i
                                class="ri-youtube-line me-2"></i>YouTube</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <!-- <img src="assets/img/Snapshot.webp" class="img-fluid animated d-none d-lg-block" alt=""> -->
                <iframe class="animated rounded-4" src="https://www.youtube.com/embed/GtYx-wsawQg?si=j8xNiJtCg-XLDHoc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>
@endsection

@section('content')
    {{-- ======= Features Section ======= --}}
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Why ?</h2>
                <p>VVIP MODS</p>
            </div>

            <div class="row mb-5" data-aos="fade-left">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="50">
                        <i class="ri-money-dollar-circle-line" style="color: #ffbb2c;"></i>
                        <h3>Harga pelajar</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="100">
                        <i class="ri-computer-line" style="color: #5578ff;"></i>
                        <h3>Up to date</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="150">
                        <i class="ri-computer-line" style="color: #e80368;"></i>
                        <h3>Aman dan kompatible</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="200">
                        <i class="ri-customer-service-line" style="color: #e361ff;"></i>
                        <h3>Full Support 24/7</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="250">
                        <i class="ri-download-line" style="color: #47aeff;"></i>
                        <h3>Akses file yang mudah</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="300">
                        <i class="ri-apps-line" style="color: #ffa76e;"></i>
                        <h3>Anti detect system 99%</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="350">
                        <i class="ri-hashtag" style="color: #11dbcf;"></i>
                        <h3>Encrypt Serial</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="400">
                        <i class="ri-chat-1-line" style="color: #4233ff;"></i>
                        <h3>Group Chat</h3>
                    </div>
                </div>
            </div>

            <div class="row mb-5 details d-flex justify-content-center">

                <div class="row content">
                    <div class="col-lg-5 d-flex justify-content-center align-content-center" data-aos="fade-right">
                        <div class="d-flex align-items-center w-50">
                            <img src="{{ asset ('assets-landing/img/apple-touch-icon.webp') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 pt-4" data-aos="fade-up">
                        <h3>Tentang program cheat vvip mods</h3>
                        <p>
                            Kami menjamin keamanan file cheat yang kami sediakan bebas dari virus berbahaya. Saat
                            file cheat
                            terdeteksi oleh anti virus, file tersebut dilindungi dan dienkripsi untuk mencegah
                            deteksi. Anda tidak
                            perlu mematikan anti virus, cukup tambahkan file cheat ke pengaturan pengecualian anti
                            virus.
                        </p>
                        <ul>
                            <li class="fst-italic"><i class="ri-checkbox-circle-line"></i> Program selalu
                                terupdate.</li>
                            <li class="fst-italic"><i class="ri-checkbox-circle-line"></i> Anti detect system.
                            </li>
                            <li class="fst-italic"><i class="ri-checkbox-circle-line"></i> Encrypt serial.</li>
                        </ul>
                        {{-- <p>
                            Kami menjamin keamanan file cheat yang kami sediakan dari virus berbahaya. Saat file cheat
                            terdeteksi oleh anti virus, file tersebut dilindungi dan dienkripsi untuk mencegah deteksi. Anda
                            tidak perlu mematikan anti virus, cukup tambahkan file cheat ke pengaturan pengecualian anti
                            virus.
                        </p> --}}
                    </div>
                </div>

                <div class="row content">
                    <div class="col-lg-5 order-1 order-lg-2 d-flex align-content-center" data-aos="fade-left">
                        <img src="{{ asset('assets-landing/img/Fasilitas vip dc.webp') }}" class="img-fluid rounded-4" alt="">
                    </div>
                    <div class="col-lg-7 pt-5 order-2 order-lg-1" data-aos="fade-up">
                        <h3>Fasilitas vvip mods</h3>
                        <p>
                            Setiap pembelian di VVIP MODS akan diberikan fasilitas Web Server untuk kemudahan member
                            dalam
                            mendownload tools cheat, file pendukung cheat, dan terutama untuk mengganti serial
                            komputer/HWID saat
                            berpindah PC.
                        </p>
                        <h3>Bagaimana cara mengetahui serial number pc/laptop saya ?</h3>
                        <p>
                            Silahkan download program untuk mengecek serial HWID & Number melalui Web Server.
                            Setelah terdownload,
                            buka program dengan cara klik kanan run ass. Maka akan muncul Serial HWID/Number anda di
                            notepad.
                            Berikan serial tersebut ke seller.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Features Section --}}

    {{-- ======= List Cheat Section ======= --}}
    <section id="list-cheat" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>VVIP MODS</h2>
                <p>LIST CHEAT YANG TERSEDIA</p>
            </div>

            <div class="row mb-5" data-aos="fade-left">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="50">
                        <img src="{{ asset('assets-landing/img/logo/ml.webp') }}" class="img-fluid me-2" width="140" alt=""
                            srcset="">
                        <!-- <i class="ri-money-dollar-circle-line" style="color: #ffbb2c;"></i> -->
                        <!-- <h3>Mobile Legends</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="100">
                        <img src="{{ asset('assets-landing/img/logo/pubgm.webp') }}" class="img-fluid me-2" width="100" alt=""
                            srcset="">
                        <!-- <i class="ri-computer-line" style="color: #5578ff;"></i> -->
                        <!-- <h3>PUBG Mobile</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="150">
                        <img src="{{ asset('assets-landing/img/logo/codm.webp') }}" class="img-fluid me-2" width="200" alt=""
                            srcset="">
                        <!-- <i class="ri-computer-line" style="color: #e80368;"></i> -->
                        <!-- <h3>COD Mobile</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="200">
                        <img src="{{ asset('assets-landing/img/logo/aov.webp') }}" class="img-fluid me-2" width="150" alt=""
                            srcset="">
                        <!-- <i class="ri-customer-service-line" style="color: #e361ff;"></i> -->
                        <!-- <h3>Arena Of Valor</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="350">
                        <img src="{{ asset('assets-landing/img/logo/pb.webp') }}" class="img-fluid me-2" width="200" alt=""
                            srcset="">
                        <!-- <i class="ri-hashtag" style="color: #11dbcf;"></i> -->
                        <!-- <h3>Point Blank Zepetto</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="400">
                        <img src="{{ asset('assets-landing/img/logo/8bp.webp') }}" class="img-fluid me-2" width="180" alt=""
                            srcset="">
                        <!-- <i class="ri-apps-line" style="color: #ffa76e;"></i> -->
                        <!-- <h3>8 Ball Poll</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="450">
                        <img src="{{ asset('assets-landing/img/logo/f84.webp') }}" class="img-fluid me-2" width="220" alt=""
                            srcset="">
                        <!-- <i class="ri-download-line" style="color: #47aeff;"></i> -->
                        <!-- <h3>Farlight84</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="500">
                        <img src="{{ asset('assets-landing/img/logo/ls.webp') }}" class="img-fluid me-2" width="180" alt=""
                            srcset="">
                        <!-- <i class="ri-chat-1-line" style="color: #4233ff;"></i> -->
                        <!-- <h3>Lost Saga</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="550">
                        <img src="{{ asset('assets-landing/img/logo/fa.webp') }}" class="img-fluid me-2" width="200" alt=""
                            srcset="">
                        <!-- <i class="ri-chat-1-line" style="color: #4233ff;"></i> -->
                        <!-- <h3>Forward Assault</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="550">
                        <img src="{{ asset('assets-landing/img/logo/contra.webp') }}" class="img-fluid me-2" width="200" alt=""
                            srcset="">
                        <!-- <i class="ri-chat-1-line" style="color: #4233ff;"></i> -->
                        <!-- <h3>Forward Assault</h3> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                        data-aos-delay="600">
                        <!-- <img src="assets/img/logo/pbp.webp" class="img-fluid me-2" width="200" alt="" srcset=""> -->
                        <!-- <i class="ri-chat-1-line" style="color: #4233ff;"></i> -->
                        <h3 class="text-center">Point Blank Private Server</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ======= End List Cheat Section ======= --}}

    {{-- ======= Gallery Section ======= --}}
    <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Galeri</h2>
                <p>Beberapa cuplikan foto</p>
            </div>

            <div class="row g-0" data-aos="fade-left">

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ asset('assets-landing/img/gallery/pb-1.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK ZEPETTO">
                            <img src="{{ asset('assets-landing/img/gallery/pb-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                        <a href="{{ asset('assets-landing/img/gallery/pb-2.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK ZEPETTO">
                            <img src="{{ asset('assets-landing/img/gallery/pb-2.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 d-none d-sm-block">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ asset('assets-landing/img/gallery/pb-3.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK ZEPETTO">
                            <img src="{{ asset('assets-landing/img/gallery/pb-3.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                        <a href="{{ asset('assets-landing/img/gallery/ml-1.webp') }}" class="gallery-lightbox"
                            data-description="MOBILE LEGENDS: BANG BANG">
                            <img src="{{ asset('assets-landing/img/gallery/ml-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                        <a href="{{ asset('assets-landing/img/gallery/ml-2.webp') }}" class="gallery-lightbox"
                            data-description="MOBILE LEGENDS: BANG BANG">
                            <img src="{{ asset('assets-landing/img/gallery/ml-2.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                        <a href="{{ asset('assets-landing/img/gallery/ml-3.webp') }}" class="gallery-lightbox"
                            data-description="MOBILE LEGENDS: BANG BANG">
                            <img src="{{ asset('assets-landing/img/gallery/ml-3.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                        <a href="{{ asset('assets-landing/img/gallery/ml-4.webp') }}" class="gallery-lightbox"
                            data-description="MOBILE LEGENDS: BANG BANG">
                            <img src="{{ asset('assets-landing/img/gallery/ml-4.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                        <a href="{{ asset('assets-landing/img/gallery/ppp-1.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK PRIVATE SERVER PROJECT BLACKSHOT">
                            <img src="{{ asset('assets-landing/img/gallery/ppp-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
                        <a href="{{ asset('assets-landing/img/gallery/ppp-2.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK PRIVATE SERVER BETA">
                            <img src="{{ asset('assets-landing/img/gallery/ppp-2.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="550">
                        <a href="{{ asset('assets-landing/img/gallery/ppp-3.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK PRIVATE SERVER BTG (Back To Gemscool)">
                            <img src="{{ asset('assets-landing/img/gallery/ppp-3.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="600">
                        <a href="{{ asset('assets-landing/img/gallery/ppp-4.webp') }}" class="gallery-lightbox"
                            data-description="POINT BLANK PRIVATE SERVER MINIMAX">
                            <img src="{{ asset('assets-landing/img/gallery/ppp-4.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="650">
                        <a href="{{ asset('assets-landing/img/gallery/codm-1.webp') }}" class="gallery-lightbox"
                            data-description="CALL OF DUTY : MOBILE">
                            <img src="{{ asset('assets-landing/img/gallery/codm-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="700">
                        <a href="{{ asset('assets-landing/img/gallery/pubgm-1.webp') }}" class="gallery-lightbox"
                            data-description="PUBG MOBILE">
                            <img src="{{ asset('assets-landing/img/gallery/pubgm-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="750">
                        <a href="{{ asset('assets-landing/img/gallery/aov-1.webp') }}" class="gallery-lightbox"
                            data-description="ARENA OF VALOR">
                            <img src="{{ asset('assets-landing/img/gallery/aov-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="800">
                        <a href="{{ asset('assets-landing/img/gallery/8bp-1.webp') }}" class="gallery-lightbox"
                            data-description="8 BALL POOL">
                            <img src="{{ asset('assets-landing/img/gallery/8bp-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="850">
                        <a href="{{ asset('assets-landing/img/gallery/lsovvip-1.webp') }}" class="gallery-lightbox"
                            data-description="FARLIGHT 84">
                            <img src="{{ asset('assets-landing/img/gallery/lsovvip-1.webp') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="900">
                        <a href="{{ asset('assets-landing/img/gallery/lsovvip-2.webp') }}" class="gallery-lightbox"
                            data-description="LOST SAGA ORIGIN VVIP">
                            <img src="{{ asset('assets-landing/img/gallery/lsovvip-2.webp') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="950">
                        <a href="{{ asset('assets-landing/img/gallery/lsovvip-3.webp') }}" class="gallery-lightbox"
                            data-description="LOST SAGA ORIGIN VVIP">
                            <img src="{{ asset('assets-landing/img/gallery/lsovvip-3.webp') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="1000">
                        <a href="{{ asset('assets-landing/img/gallery/lsovvip-4.webp') }}" class="gallery-lightbox"
                            data-description="LOST SAGA ORIGIN VVIP">
                            <img src="{{ asset('assets-landing/img/gallery/lsovvip-4.webp') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="1050">
                        <a href="{{ asset('assets-landing/img/gallery/contra-1.webp') }}" class="gallery-lightbox"
                            data-description="CONTRA TOURNAMENT">
                            <img src="{{ asset('assets-landing/img/gallery/contra-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="1050">
                        <a href="{{ asset('assets-landing/img/gallery/contra-2.webp') }}" class="gallery-lightbox"
                            data-description="CONTRA TOURNAMENT">
                            <img src="{{ asset('assets-landing/img/gallery/contra-2.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="1050">
                        <a href="{{ asset('assets-landing/img/gallery/f84-1.webp') }}" class="gallery-lightbox"
                            data-description="FARLIGHT 84">
                            <img src="{{ asset('assets-landing/img/gallery/f84-1.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="1050">
                        <a href="{{ asset('assets-landing/img/gallery/f84-2.webp') }}" class="gallery-lightbox"
                            data-description="FARLIGHT 84">
                            <img src="{{ asset('assets-landing/img/gallery/f84-2.webp') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- End Gallery Section --}}

    {{-- ======= Pricing Section ======= --}}
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>VVIP MODS</h2>
                <p>HARGA PAKETAN</p>
            </div>

            <div class="row mb-5" data-aos="fade-left">
                <table class="table table-striped table-bordered" id="daftar-harga">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Game</th>
                            <th>Paket</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">

                        <!-- Data Mobile Legends -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 150.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 225.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Mobile Legends</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <!-- Data Point Blank Zepetto -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>1 Hari</td>
                            <td>Rp. 10.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>2 Hari</td>
                            <td>Rp. 15.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>3 + 2 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>7 + 3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>14 + 4 Hari</td>
                            <td>Rp. 70.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>21 + 5 Hari</td>
                            <td>Rp. 90.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>30 + 6 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>60 + 7 Hari</td>
                            <td>Rp. 180.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Point Blank Zepetto</td>
                            <td>90 + 8 Hari</td>
                            <td>Rp. 250.000</td>
                        </tr>

                        <!-- Data PUBG Mobile -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 200.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>PUBG Mobile</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 325.000</span>
                            </td>
                        </tr>

                        <!-- Data COD Mobile -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 200.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>COD Mobile</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 325.000</span>
                            </td>
                        </tr>

                        <!-- Data 8 Ball Pool -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 150.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 225.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>8 Ball Pool</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <!-- Data Arena of Valor -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 150.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 225.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Arena Of Valor</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <!-- Data Lost Saga Origin VIP -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>1 Hari</td>
                            <td>Rp. 30.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>14 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Lost Saga Origin VIP</td>
                            <td>30 Hari</td>
                            <td>Rp. 200.000</td>
                        </tr>

                        <!-- Data Farlight 84 -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>60 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 200.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>90 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 275.000</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Farlight 84</td>
                            <td>120 Hari <span class="promo-text">*promo</span></td>
                            <td>
                                <span>Rp. 325.000</span>
                            </td>
                        </tr>

                        <!-- Data Forward Assault -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>3 Hari</td>
                            <td>Rp. 25.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>7 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>14 Hari</td>
                            <td>Rp. 75.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Forward Assault</td>
                            <td>30 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <!-- Data Contra Tournament -->

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Contra Tournament</td>
                            <td>3 Hari</td>
                            <td>Rp. 50.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Contra Tournament</td>
                            <td>7 Hari</td>
                            <td>Rp. 100.000</td>
                        </tr>

                        <tr>
                            <td class="auto-increment"></td>
                            <td>Contra Tournament</td>
                            <td>30 Hari</td>
                            <td>Rp. 150.000</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{-- End Features Section --}}


    {{-- ======= F.A.Q Section ======= --}}
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Pertanyaan & Jawaban</p>
            </div>

            <div class="faq-list">
                <ul>

                    <li data-aos="fade-up">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Cheatnya anti banned ? <i
                                class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Sebenernya nggak ada cheat anti banned, semuanya tergantung cara kita main. Min slow
                                tapi nembok juga
                                bisa kena banned, yang penting pinter pinter aja kita ngakalinnya biar nggak
                                ketahuan player lain kalo
                                kita nge cheat. Kalaupun mau barbar enakan di akun baru.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Cheatnya 24 jam atau tiap 12 jam harus
                            update ? <i class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Cheat vip tidak perlu update setiap pergantian hari. Misal kamu order 1 hari di jam
                                12 siang, besok
                                habisnya juga jam 12 siang, jadi nggak perlu repot" download tiap jam 12 malem.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">Apakah saat di remote control aman ? <i
                                class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Jawabannya tergantung, kalau yang ngecek jago biasanya dicek juga file-filenya atau
                                pakai process
                                hacker, kamu bisa keciduk. Tapi kalau lawan yang ngecek cuma cek pb doang, aman.
                                Fitur cheat tidak
                                akan terlihat jika sedang di remote.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">Cheat ini terdeteksi virus ? <i
                                class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tidak, karna kami membuat cheat safe tidak merusak software, hanya saja menampilkan
                                beberapa mod
                                tambahan untuk kelancaran dalam bermain di dalam game.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">Apakah cheat yang free aman dari DC
                            biru ? <i class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Aman jika menyeimbangkan kill dan death dalam gameplay anda.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-6" class="collapsed">Apakah cheat VIP juga sama harus
                            menyeimbangkan kill & death ? <i class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tidak, karna untuk cheat vip kami mengutamakan keamanan akun anad, jadi fiture
                                sesuai dengan
                                perkembangan game, itu kenapa tiap kali ada maintenance pasti ada saja salah satu
                                fitur cheat kami
                                yang di hilangkan, itu supaya menjaga cheat tetap aman dan kondusif didalam gamenya.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="600">
                        <i class="ri-question-line icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-7" class="collapsed">Setelah membeli cheat apakah diajarkan
                            sampai bisa ? <i class="ri-arrow-down-s-line icon-show"></i><i
                                class="ri-arrow-up-s-line icon-close"></i></a>
                        <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tentu saja, setelah memberi akan admin arahkan tata cara pemakaiannya, kalo gk
                                diajarin ya mana bisa
                                make kecuali sebelume udah tau gimana cara makenya -,-
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>
    {{-- End F.A.Q Section --}}
@endsection

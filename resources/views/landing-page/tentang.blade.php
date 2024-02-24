@extends('landing-page.layout.main')

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
                        <h3>Terbaru</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="150">
                        <i class="ri-computer-line" style="color: #e80368;"></i>
                        <h3>Aman dan kompatibel</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="200">
                        <i class="ri-customer-service-line" style="color: #e361ff;"></i>
                        <h3>Layanan 24/7</h3>
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
                        <h3>Anti deteksi sistem 99%</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="350">
                        <i class="ri-hashtag" style="color: #11dbcf;"></i>
                        <h3>Enkripsi Serial</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-4">
                    <div class="icon-box rounded-4 h-100" data-aos="zoom-in" data-aos-delay="400">
                        <i class="ri-chat-1-line" style="color: #4233ff;"></i>
                        <h3>Grup Anggota</h3>
                    </div>
                </div>
            </div>

            <div class="row mb-5 details d-flex justify-content-center">

                <div class="row content">
                    <div class="col-lg-5 d-flex justify-content-center align-content-center" data-aos="fade-right">
                        <div class="d-flex align-items-center w-50">
                            <img src="{{ asset('assets-landing/img/apple-touch-icon.webp') }}"
                                class="img-fluid rounded-4" alt="">
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
                            <li class="fst-italic"><i class="ri-checkbox-circle-line"></i> Anti deteksi system.
                            </li>
                            <li class="fst-italic"><i class="ri-checkbox-circle-line"></i> Enkripsi serial.</li>
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
                        <img src="{{ asset('assets-landing/img/Fasilitas vip dc.webp') }}" class="img-fluid rounded-4"
                            alt="">
                    </div>
                    <div class="col-lg-7 pt-5 order-2 order-lg-1" data-aos="fade-up">
                        <h3>Fasilitas vvip mods</h3>
                        <p>
                            Setiap pembelian di VVIP MODS akan diberikan fasilitas Web Server untuk kemudahan member
                            dalam mendownload tools cheat, file pendukung cheat, dan terutama untuk mengganti serial komputer/HWID saat berpindah PC.
                        </p>
                        <h3>Bagaimana cara mengetahui serial pc/laptop saya ?</h3>
                        <p>
                            Silahkan unduh program untuk mengecek serial HWID & Number melalui Web Server.
                            Setelah terunduh, buka program dengan cara klik kanan run as. Maka akan muncul Serial HWID/Serial anda di
                            notepad. Berikan serial tersebut ke seller.
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
                            <img src="{{ asset('assets-landing/img/logo/ml.webp') }}" class="img-fluid me-2" width="140"
                                alt="" srcset="">
                            <!-- <i class="ri-money-dollar-circle-line" style="color: #ffbb2c;"></i> -->
                            <!-- <h3>Mobile Legends</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="100">
                            <img src="{{ asset('assets-landing/img/logo/pubgm.webp') }}" class="img-fluid me-2" width="100"
                                alt="" srcset="">
                            <!-- <i class="ri-computer-line" style="color: #5578ff;"></i> -->
                            <!-- <h3>PUBG Mobile</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="150">
                            <img src="{{ asset('assets-landing/img/logo/codm.webp') }}" class="img-fluid me-2" width="200"
                                alt="" srcset="">
                            <!-- <i class="ri-computer-line" style="color: #e80368;"></i> -->
                            <!-- <h3>COD Mobile</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="200">
                            <img src="{{ asset('assets-landing/img/logo/aov.webp') }}" class="img-fluid me-2" width="150"
                                alt="" srcset="">
                            <!-- <i class="ri-customer-service-line" style="color: #e361ff;"></i> -->
                            <!-- <h3>Arena Of Valor</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="350">
                            <img src="{{ asset('assets-landing/img/logo/pb.webp') }}" class="img-fluid me-2" width="200"
                                alt="" srcset="">
                            <!-- <i class="ri-hashtag" style="color: #11dbcf;"></i> -->
                            <!-- <h3>Point Blank Zepetto</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="400">
                            <img src="{{ asset('assets-landing/img/logo/8bp.webp') }}" class="img-fluid me-2" width="180"
                                alt="" srcset="">
                            <!-- <i class="ri-apps-line" style="color: #ffa76e;"></i> -->
                            <!-- <h3>8 Ball Poll</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="450">
                            <img src="{{ asset('assets-landing/img/logo/f84.webp') }}" class="img-fluid me-2" width="220"
                                alt="" srcset="">
                            <!-- <i class="ri-download-line" style="color: #47aeff;"></i> -->
                            <!-- <h3>Farlight84</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="500">
                            <img src="{{ asset('assets-landing/img/logo/ls.webp') }}" class="img-fluid me-2" width="180"
                                alt="" srcset="">
                            <!-- <i class="ri-chat-1-line" style="color: #4233ff;"></i> -->
                            <!-- <h3>Lost Saga</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="550">
                            <img src="{{ asset('assets-landing/img/logo/fa.webp') }}" class="img-fluid me-2" width="200"
                                alt="" srcset="">
                            <!-- <i class="ri-chat-1-line" style="color: #4233ff;"></i> -->
                            <!-- <h3>Forward Assault</h3> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-4">
                        <div class="icon-box d-flex justify-content-center rounded-4 h-100" data-aos="zoom-in"
                            data-aos-delay="550">
                            <img src="{{ asset('assets-landing/img/logo/contra.webp') }}" class="img-fluid me-2"
                                width="200" alt="" srcset="">
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
@endsection

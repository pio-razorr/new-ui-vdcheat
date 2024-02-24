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
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="row" data-aos="fade-up">

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="count-box">
                        <i class="bi bi-person-circle"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalUser->count() }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total user</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="count-box">
                        <i class="bi bi-people-fill"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalMember->count() }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total member</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-sm-0 col-6">
                    <div class="count-box">
                        <i class="bi bi-cart-check"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalTransaksi->count() }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total transaksi</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-sm-0 col-6">
                    <div class="count-box">
                        <i class="bi bi-discord"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $totalGame->count() }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total game</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Daftar Seller</p>
            </div>

            <div class="row" data-aos="fade-left">
                @foreach ($totalUserPaginate as $data)
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets-landing/img/team/user.webp') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $data->name }}</h4>
                                <span>
                                    @if ($data->role == 'resseler')
                                        Resseler
                                    @elseif ($data->role == 'resseler_vip')
                                        Resseler VIP
                                    @elseif ($data->role == 'admin')
                                        Admin
                                    @elseif ($data->role == 'ceo')
                                        CEO
                                    @endif
                                </span>
                                <div class="social">
                                    {{-- Whatsapp --}}
                                    @if (!empty($data->no_hp))
                                        <a href="https://wa.me/{{ $data->no_hp }}" target="_blank"><i
                                                class="bi bi-whatsapp"></i></a>
                                    @endif

                                    {{-- Instagram --}}
                                    @if (!empty($data->instagram))
                                        <a href="{{ $data->instagram }}" target="_blank"><i
                                                class="bi bi-instagram"></i></a>
                                    @endif

                                    {{-- Facebook --}}
                                    @if (!empty($data->facebook))
                                        <a href="{{ $data->facebook }}" target="_blank"><i
                                                class="bi bi-facebook"></i></a>
                                    @endif
                                    {{-- <a href=""><i class="bi bi-twitter"></i></a> --}}
                                    {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $totalUserPaginate->links() }}
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets-landing/img/team/user.webp') }}" class="testimonial-img"
                                alt="">
                            <h3>Alvin Ramadhani</h3>
                            <h4>CEO</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Programnya sangat mudah dipahami bagi pemula yang ingin mencoba hal baru dalam dunia esport.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets-landing/img/team/user.webp') }}" class="testimonial-img"
                                alt="">
                            <h3>Iqhwan Siswanto</h3>
                            <h4>Admin</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Untuk programnya mantap, dan juga harganya bersahabat untuk di kalangan pelajar.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets-landing/img/team/user-2.webp') }}" class="testimonial-img"
                                alt="">
                            <h3>Ikuza Dev</h3>
                            <h4>CEO D5STUDIO</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Mantep banget coy, dengan pelayanan yang ramah serta penjelasan dari admin cara penggunaan programnya sangat mudah dipahamin buat pemula seperti saya ini.
                                Rekomended pokoknya 👌
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

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

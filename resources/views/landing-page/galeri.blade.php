@extends('landing-page.layout.main')

@section('content')

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

@endsection

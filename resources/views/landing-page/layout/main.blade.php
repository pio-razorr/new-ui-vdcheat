<!DOCTYPE html>
<html lang="en">

@include('landing-page.layout.head')

<body>

    {{-- ======= Header ======= --}}
    @include('landing-page.layout.navbar')
    {{-- End Header --}}

    {{-- ======= Hero Section ======= --}}
    <section id="hero">

        {{-- Home --}}
        @yield('home-hero')

        @unless (Request::is('/'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center justify-content-center">
                        <div data-aos="zoom-out">
                            <div class="d-flex justify-content-center align-items-center">
                                {{-- <div class="w-25 text-center">
                                    <img src="{{ asset ('assets-landing/img/alvin-cheat.webp') }}" class="img-fluid w-75 my-3" alt="">
                                </div> --}}
                                <h1 id="testimoni-title" class="text-center"><span>TESTIMONI</span></h1>
                            </div>
                            {{-- <div class="d-flex align-items-center">
                                <i class="bi bi-house-door text-white fs-3 me-2"></i>
                                <h3 class="text-white m-0">Home ><a href="/test"> Test</a></h3>
                            </div> --}}
                        </div>
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
        @endunless

    </section>
    {{-- End Hero --}}

    {{-- ======= Main Section ======= --}}
    <main id="main">

        {{-- Home --}}
        @yield('home')

        {{-- About --}}
        @yield('about')

        {{-- Harga --}}
        @yield('harga')

        {{-- Gallery --}}
        @yield('galeri')

        {{-- Testimoni --}}
        @yield('testimoni')


    </main>
    {{-- End Main --}}

    {{-- ======= Footer ======= --}}
    @include('landing-page.layout.footer')
    {{-- End Footer --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    @include('landing-page.layout.script')

</body>

</html>

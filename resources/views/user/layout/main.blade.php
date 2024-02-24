<!DOCTYPE html>
<html lang="en">

@include('user.layout.head')

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <div id="app">

        @include('user.layout.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="row" data-aos="zoom-in">
                    <div class="col-6">
                        <h3>@yield('title')</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ $authUser->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">
                                    @if ($authUser->role == 'resseler')
                                        Resseler
                                    @elseif ($authUser->role == 'resseler_vip')
                                        Resseler VIP
                                    @elseif ($authUser->role == 'admin')
                                        Admin
                                    @elseif ($authUser->role == 'ceo')
                                        CEO
                                    @endif
                                </p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <a href="/profil"><img src={{ asset('assets-pio/img/alvin-cheat.webp') }}></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                @yield('content-body')
            </div>

            @include('user.layout.footer')
        </div>

    </div>

    @include('user.layout.script')

    @include('sweetalert::alert')

</body>

</html>

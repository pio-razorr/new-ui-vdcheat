<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="#"><span>VVIP MODS</span></a></h1>
            {{-- Uncomment below if you prefer to use an image logo --}}
            {{-- <a href="#"><img src="assets/img/logo/logo-dc.png" alt="" class="img-fluid"></a> --}}
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                {{-- Navbar awal --}}
                {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#features">About</a></li>
                <li><a class="nav-link scrollto" href="#list-cheat">List cheat</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
                <li><a class="nav-link scrollto" href="#faq">Q&A</a></li> --}}
                {{-- End Navbar awal --}}

                {{-- Navbar baru --}}
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/tentang">Tentang</a></li>
                <li><a class="nav-link scrollto" href="/harga">Harga</a></li>
                <li><a class="nav-link scrollto" href="/galeri">Galeri</a></li>

                @if ($testimonis->count() > 0)
                    <li><a class="nav-link scrollto" href="/testimoni">Testimoni</a></li>
                @endif

                {{-- Jika user dan member sudah login, maka navbar login dihilangkan --}}
                @if (!Auth::guard('web')->check() && !Auth::guard('member')->check())
                    <li><a class="nav-link scrollto" href="/login">Login</a></li>
                @endif

                {{-- Jika user sudah login, maka menampilkan navbar beranda --}}
                @if (Auth::guard('web')->check())
                    <li><a class="nav-link scrollto" href="/dashboard">Beranda</a></li>
                @endif

                {{-- Jika member sudah login, maka menampilkan navbar beranda --}}
                @if (Auth::guard('member')->check())
                    <li><a class="nav-link scrollto" href="/dashboard-member">Beranda</a></li>
                @endif
                {{-- End Navbar baru --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>

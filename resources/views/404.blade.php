@include('user.layout.head')

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="error">

        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('assets/compiled/svg/error-404.svg') }}" alt="Not Found">
                    <h1 class="error-title">NOT FOUND</h1>
                    <p class='fs-5 text-gray-600'>The page you are looking not found.</p>

                    <!-- Menggunakan JavaScript untuk kembali ke halaman sebelumnya -->
                    <a href="javascript:void(0);" onclick="goBack()" class="btn btn-lg btn-outline-primary mt-3">Go
                        Back</a>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Fungsi untuk kembali ke halaman sebelumnya
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>

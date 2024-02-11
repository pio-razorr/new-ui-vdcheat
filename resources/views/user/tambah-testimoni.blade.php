<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    <script src="assets/static/js/initTheme.js"></script>
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
                        <h3>Tambah testimoni</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ $authUser->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">
                                    @if ($authUser->role == 'resseler' && $authUser->saldo <= 10000000)
                                        Resseler
                                    @elseif ($authUser->role == 'resseler' && $authUser->saldo >= 10000000)
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
                                    <img src={{ asset('assets-pio/img/alvin-cheat.png') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-lg-6">

                        <div class="row">

                            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah testimoni</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        1. Gambar harus ber extensi jpg, jpeg, atau png.
                                    </p>
                                    <p class="card-text">
                                        2. Ukuran maksimal gambar adalah 2mb.
                                    </p>

                                    <hr>

                                    <form id="tambah-user-form" class="form" action="/tambah-testimoni" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="deskripsi" class="mb-2">Deskripsi</label>
                                                    <input type="text" class="form-control" id="deskripsi"
                                                        placeholder="Masukkan deskripsi" name="deskripsi" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="upload-testimoni" class="mb-2">Upload foto</label>
                                                    <!-- File uploader with image preview -->
                                                    <div id="upload-testimoni"
                                                        class="filepond--root image-preview-filepond filepond--hopper"
                                                        data-style-button-remove-item-position="left"
                                                        data-style-button-process-item-position="right"
                                                        data-style-load-indicator-position="right"
                                                        data-style-progress-indicator-position="right"
                                                        data-style-button-remove-item-align="false"
                                                        style="height: 76px;"><input class="filepond--browser"
                                                            type="file" id="filepond--browser-145blcbb5"
                                                            aria-controls="filepond--assistant-145blcbb5"
                                                            aria-labelledby="filepond--drop-label-145blcbb5"
                                                            accept="image/png,image/jpg,image/jpeg" name="filepond" required>
                                                        <div class="filepond--drop-label"
                                                            style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                            <label for="filepond--browser-145blcbb5"
                                                                id="filepond--drop-label-145blcbb5"
                                                                aria-hidden="true">Drag &amp; Drop
                                                                your files or <span class="filepond--label-action"
                                                                    tabindex="0">Browse</span></label>
                                                        </div>
                                                        <div class="filepond--list-scroller"
                                                            style="transform: translate3d(0px, 0px, 0px);">
                                                            <ul class="filepond--list" role="list">
                                                            </ul>
                                                        </div>
                                                        <div class="filepond--panel filepond--panel-root"
                                                            data-scalable="true">
                                                            <div class="filepond--panel-top filepond--panel-root">
                                                            </div>
                                                            <div class="filepond--panel-center filepond--panel-root"
                                                                style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                                            </div>
                                                            <div class="filepond--panel-bottom filepond--panel-root"
                                                                style="transform: translate3d(0px, 68px, 0px);">
                                                            </div>
                                                        </div><span class="filepond--assistant"
                                                            id="filepond--assistant-145blcbb5" role="status"
                                                            aria-live="polite" aria-relevant="additions"></span>
                                                        <fieldset class="filepond--data">
                                                        </fieldset>
                                                        <div class="filepond--drip"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @include('layout.footer')
        </div>

    </div>

    @include('layout.script')

    @include('sweetalert::alert')


    {{-- Sweet alert konfirmasi tombol hapus --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteForms = document.querySelectorAll(".delete-form");

            deleteForms.forEach((form) => {
                form.addEventListener("submit", function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: "Anda yakin ?",
                        text: "Data user akan dihapus secara permanen",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Ya, hapus !"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form
                                .submit(); // Lanjutkan dengan mengirimkan formulir jika pengguna mengonfirmasi
                        }
                    });
                });
            });
        });
    </script>

    <script>
        AOS.init();
    </script>

</body>

</html>

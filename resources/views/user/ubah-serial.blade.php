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
                        <h3>Ubah serial member</h3>
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
                    <div class="col-lg-6">

                        <div class="row">
                            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Informasi</h4>
                                        <p class="card-text">
                                            Cek terlebih dahulu apakah data member yang akan dirubah sudah betul atau belum.
                                        </p>

                                        <form class="form" action="{{ '/ubah-serial/' . $data->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="name" class="sr-only">Name</label>
                                                    <input type="text" id="name" class="form-control"
                                                        placeholder="" name="name"
                                                        value="{{ $data->name }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="game" class="sr-only">Game</label>
                                                    <input type="text" id="game" class="form-control"
                                                        placeholder="" name="game"
                                                        value="{{ $data->game }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="serial" class="sr-only">Serial</label>
                                                    <input type="text" id="serial" class="form-control"
                                                        placeholder="Masukkan serial" name="serial"
                                                        value="{{ $data->serial }}">
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary me-1">Ubah</button>
                                            </div>
                                        </form>

                                    </div>
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

    <script>
        AOS.init();
    </script>

</body>

</html>

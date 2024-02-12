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
                        <h3>Data testimoni</h3>
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
                    <div class="col-12">

                        <div class="row">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4 class="card-title">Data Testimoni</h4>
                                    <a href="/tambah-testimoni" class="btn btn-outline-primary">Tambah data</a>
                                </div>
                                <div class="card-body">
                                    @if ($testimonis->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0" id="data-testimoni">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Gambar</th>
                                                        <th>Deskripsi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($testimonis as $testimoni)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <img src="{{ asset('/storage/posts/' . $testimoni->image) }}"
                                                                    class="img-fluid rounded-3" width="100">
                                                            </td>
                                                            <td>{{ $testimoni->deskripsi }}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    {{-- <a href="{{ '/data-testimoni/' . $testimoni->id . '/edit' }}"
                                                                    class="btn icon btn-sm btn-primary me-2">
                                                                    <i class="bi bi-pencil"></i>
                                                                </a> --}}
                                                                    <form
                                                                        action="{{ route('images.destroy', $testimoni->id) }}"
                                                                        method="POST" class="delete-form">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn icon btn-sm btn-danger"
                                                                            data-confirm-delete="true">
                                                                            <i class="bi bi-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <h1>Data kosong</h1>
                                    @endif

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

    {{-- Inisialisasi DataTable --}}
    <script>
        $(document).ready(function() {
            $('#data-testimoni').DataTable();
        });
    </script>

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

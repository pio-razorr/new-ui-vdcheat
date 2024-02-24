<script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
<script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/compiled/js/app.js') }}"></script>

{{-- Link JS Data AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- HTML2Canvas --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

{{-- Sweet alert 2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- DataTables --}}
<script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/static/js/pages/datatables.js') }}"></script>

{{-- File uploader --}}
<script
    src="{{ asset('assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
</script>
<script
    src="{{ asset('assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
</script>
<script src="{{ asset('assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
<script
    src="{{ asset('assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
</script>
<script src="{{ asset('assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js') }}">
</script>
<script src="{{ asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}">
</script>
<script src="{{ asset('assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}">
</script>
<script src="{{ asset('assets/extensions/filepond/filepond.js') }}"></script>
<script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
<script src="{{ asset('assets/static/js/pages/filepond.js') }}"></script>










{{-- Inisialisasi DataTable --}}
<script>
    $(document).ready(function() {
        $('#history-transaksi').DataTable();
    });
    $(document).ready(function() {
        $('#member-serial').DataTable();
    });

    $(document).ready(function() {
        $('#member-non-serial').DataTable();
    });
    $(document).ready(function() {
        $('#data-user').DataTable();
    });
    $(document).ready(function() {
        $('#data-testimoni').DataTable();
    });
</script>



{{-- Sweet alert konfirmasi tombol hapus member --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteForms = document.querySelectorAll(".delete-member-form");

        deleteForms.forEach((form) => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Anda yakin ?",
                    text: "Data member akan dihapus secara permanen",
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



{{-- Sweet alert konfirmasi tombol hapus pengguna --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteForms = document.querySelectorAll(".delete-user-form");

        deleteForms.forEach((form) => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Anda yakin ?",
                    text: "Data pengguna akan dihapus.",
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



{{-- Sweet alert konfirmasi tombol hapus banned --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteForms = document.querySelectorAll(".banned-form");

        deleteForms.forEach((form) => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Anda yakin ?",
                    text: "Pengguna akan dibanned",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, banned !"
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



{{-- Sweet alert konfirmasi tombol hapus unbanned --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteForms = document.querySelectorAll(".unbanned-form");

        deleteForms.forEach((form) => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Anda yakin ?",
                    text: "Pengguna akan di unbanned",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, unbanned !"
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


{{-- Sweet alert konfirmasi tombol hapus testimoni --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteForms = document.querySelectorAll(".delete-testimoni-form");

        deleteForms.forEach((form) => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Anda yakin ?",
                    text: "Pengguna akan di unbanned",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, unbanned !"
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


{{-- Toastify alert login success --}}
@if (session('login_sukses'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "Login berhasil"
        });
    </script>
@endif




{{-- DATA USER --}}
<script>
    $(document).ready(function() {
        // Cek jika ada pesan sukses-pendaftaran, tampilkan tab "Tambah user"
        if ('{{ Session::get('success-pendaftaran') }}') {
            // Atur tab "Tambah user" sebagai tab aktif
            $('#profile-tab').tab('show');
        }

        // Atur handler untuk form submission
        $('#tambah-user-form').submit(function() {
            // Atur tab "Tambah user" sebagai tab aktif setelah formulir dikirim
            $('#profile-tab').tab('show');
        });
    });
</script>



{{-- TRANSAKSI --}}
<script>
    // Mendapatkan referensi elemen dropdown dengan id "game"
    const gameSelect = document.getElementById('game');

    // Mendapatkan referensi elemen inputan serial
    const serialGroup = document.getElementById('serial-group');

    // Mendapatkan referensi elemen inputan paket
    const paketGroup = document.getElementById('paket-group');

    // Menambahkan event listener ke elemen dropdown
    gameSelect.addEventListener('change', function() {
        if (gameSelect.value === 'Mobile Legends') {

            // Jika pengguna memilih "Mobile Legends," sembunyikan inputan serial dan tampilkan inputan paket
            serialGroup.style.display = 'none';
            paketGroup.style.display = 'block';

            // Hilangkan validasi required
            document.querySelector('#serial').removeAttribute('required');

        } else if (gameSelect.value === 'Point Blank Zepetto' || gameSelect.value === 'Point Blank Private') {

            // Jika pengguna memilih "Point Blank Zepetto" atau "Point Blank Private," tampilkan inputan serial dan inputan paket
            serialGroup.style.display = 'block';
            paketGroup.style.display = 'block';

        } else {

            // Untuk pilihan game lain, sembunyikan keduanya
            serialGroup.style.display = 'none';
            paketGroup.style.display = 'none';

        }
    });
</script>




{{-- HTML2 Canvas screenshot --}}
<script>
    const container = document.getElementById("card-screenshot");
    const captureButton = document.getElementById("capture-button");
    const previewContainer = document.getElementById("preview-container");
    const downloadButton = document.getElementById("download-button");

    captureButton.addEventListener("click", async () => {
        downloadButton.classList.remove("d-none");
        const canvas = await html2canvas(container);
        const imageURL = canvas.toDataURL();
        previewContainer.innerHTML = `<img src="${imageURL}" id="image">`;
        downloadButton.href = imageURL;
        downloadButton.download = "image.png";
    });

    window.onload = () => {
        downloadButton.classList.add("d-none");
        previewContainer.innerHTML = "";
    };
</script>


<script>
    AOS.init();
</script>

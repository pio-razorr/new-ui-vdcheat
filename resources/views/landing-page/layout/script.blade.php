<!-- Sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Datatable -->
<script src="{{ asset('assets-landing/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets-landing/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets-landing/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets-landing/static/js/pages/datatables.js') }}"></script>

<!-- Inisialisasi Datatable -->
<script>
    $(document).ready(function() {
        $('#daftar-harga').DataTable();
    });
</script>

<!-- Vendor JS Files -->
<script src="{{ asset('assets-landing/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets-landing/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-landing/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets-landing/js/main.js') }}"></script>

<!-- Auto Increment Kolom Nomor Table Harga -->
<script>
    // Ambil semua elemen <td> dengan kelas "auto-increment"
    var autoIncrementCells = document.querySelectorAll('.auto-increment');

    // Loop melalui setiap elemen dan atur nilai sesuai dengan indeks
    autoIncrementCells.forEach(function(cell, index) {
        cell.textContent = index + 1;
    });
</script>

<!-- Sweet alert -->
<script>
    // Fungsi untuk menampilkan SweetAlert2 dengan penundaan 1 jam
    function showPromoAlert() {
        // Ambil waktu terakhir alert ditampilkan dari localStorage
        var lastAlertTime = localStorage.getItem('lastAlertTime');
        // Ambil waktu saat ini
        var currentTime = new Date().getTime();

        // Periksa apakah alert belum pernah ditampilkan atau sudah 1 jam sejak terakhir ditampilkan
        if (!lastAlertTime || (currentTime - lastAlertTime) > 3600000) { // 3600000 milidetik = 1 jam
            setTimeout(function() {
                Swal.fire({
                    title: 'PROMO HARGA CHEAT !!!',
                    text: 'Cek di menu harga untuk mengetahui promo promonya.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                // Set waktu terakhir alert ditampilkan
                localStorage.setItem('lastAlertTime', currentTime);
            }, 5000); // Penundaan selama 5 detik (5000 milidetik) sebelum alert muncul
        }
    }

    // Panggil fungsi showPromoAlert saat dokumen selesai dimuat
    document.addEventListener("DOMContentLoaded", showPromoAlert);
</script>

<script>
    // Ambil bagian halaman setelah domain
    var path = window.location.pathname;
    
    // Ubah menjadi huruf kapital
    var pageTitle = path.charAt(1).toUpperCase() + path.slice(2);

    // Hapus garis miring (/) jika ada
    pageTitle = pageTitle.replace('/', '');

    // Jika pageTitle kosong, artinya halaman utama
    if (pageTitle === '') {
        pageTitle = 'HOME';
    }

    // Ubah teks testimoni sesuai dengan judul halaman
    document.getElementById('testimoni-title').innerHTML = '<span>' + pageTitle + '</span>';
</script>

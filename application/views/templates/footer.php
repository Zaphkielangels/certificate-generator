<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; certificate generator 2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- jQuery -->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript -->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom script for file input label -->
<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>

<!-- Your custom scripts -->
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
<script>
    // Tunggu 3 detik, lalu sembunyikan notifikasi
    setTimeout(function() {
        document.getElementById('notification').style.display = 'none';
    }, 3000); // 3000 milidetik = 3 detik
</script>

<!-- Script JavaScript untuk mengatur visibilitas informasi kontak -->
<script>
    // Ambil elemen sidebar dan informasi kontak
    const sidebar = document.getElementById('accordionSidebar');
    const contactInfo = document.querySelector('.contact-info');

    // Fungsi untuk menyembunyikan informasi kontak saat toggle sidebar diperkecil
    function toggleContactInfo() {
        if (sidebar.classList.contains('toggled')) {
            // Sidebar diperkecil, sembunyikan informasi kontak
            contactInfo.style.display = 'none';
        } else {
            // Sidebar dalam keadaan normal, tampilkan informasi kontak
            contactInfo.style.display = 'block';
        }
    }

    // Panggil fungsi saat toggle sidebar diubah (diklik)
    document.getElementById('sidebarToggle').addEventListener('click', toggleContactInfo);
</script>


</body>

</html>
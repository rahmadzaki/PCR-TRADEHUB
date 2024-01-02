<script src="<?= base_url('assets/') ?>src/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>src/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>src/js/sidebarmenu.js"></script>
<script src="<?= base_url('assets/') ?>src/js/app.min.js"></script>
<script src="<?= base_url('assets/') ?>src/libs/simplebar/dist/simplebar.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');

    // Fungsi pencarian
    function performSearch() {
        const keyword = searchInput.value.trim();
        if (keyword !== '') {
            // Gantilah URL dengan URL pencarian yang sesuai
            window.location.href = '<?= site_url('Search/') ?>' + encodeURIComponent(keyword);
        }
    }

    // Tambahkan event listener untuk tombol pencarian
    searchButton.addEventListener('click', performSearch);

    // Tambahkan event listener untuk tombol Enter pada keyboard
    searchInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            performSearch();
        }
    });
});
</script>


</body>

</html>
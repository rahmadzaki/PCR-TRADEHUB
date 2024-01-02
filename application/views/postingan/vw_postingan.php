<div class="container-fluid">
    <div class="card">
        <a href="<?= base_url('Postingan/tambah/'); ?>" class="btn btn-primary"> Jual Barang Anda Sekarang!</a>
    </div>
    <div class="row">
        <?php $i = 1; ?>
        <?php foreach ($postingan as $us): ?>
            <div class="col-sm-4 col-xl-3"><!-- Adjusted column size for three columns in a row -->
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img
                                src="<?= base_url('gambar/') . $us['gambar']; ?>"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="<?= base_url('index.php/Postingan/hapus/') . $us['id']; ?>"
                            class="btn btn-danger position-absolute top-0 end-0 mt-3 me-3">Hapus</a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">
                            <?= $us['nama']; ?>
                        </h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">
                                <?= $us['harga']; ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                // After every third card, close the current row and start a new row
                if ($i % 3 == 0) {
                    echo '</div><div class="row">';
                }
                $i++;
            ?>
        <?php endforeach; ?>
    </div>
</div>

</div>
</div>
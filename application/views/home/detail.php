<!-- application/views/home/vw_detail_produk.php -->

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <center>
                <h5 class="card-title fw-semibold mb-4">Detail Barang</h5>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                    <img src="<?= base_url('gambar/') . $detail_barang['gambar']; ?>" class="card-img-top rounded-0"
                        alt="...">
                </div>
                <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Nama Barang : <?= $detail_barang['nama']; ?></h6>
                    <p class="fw-normal fs-4 mb-0">Harga Barang : <?= $detail_barang['harga']; ?></p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="fw-normal fs-4 mb-0">Keterangan : <?= $detail_barang['detail']; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <center>
            <h5 class="card-title fw-semibold mb-4">Ayo Lihat Barang Bekas Murah Disini!</h5>
            <p class="mb-0">Dijamin Murah!</p>
            </center>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-xl-3">
            <?php $i = 1; ?>
            <?php foreach ($postingan as $us): ?>
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img
                                src="<?= base_url('assets/src/images/products/') . $us['gambar']; ?>"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="<?= base_url('index.php/Postingan/hapus/'); ?>"
                            class="btn btn-danger position-absolute top-0 end-0 mt-3 me-3" class>Hapus</a>"
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">
                            <?= $us['nama']; ?>
                        </h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">
                                <?= $us['harga']; ?>
                                <!-- <ul class="list-unstyled d-flex align-items-center mb-0">
                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                        <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                        <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    </ul> -->
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
      </div>  
    </div>
  </div>
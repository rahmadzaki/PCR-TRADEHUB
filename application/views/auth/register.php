<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= base_url('assets/') ?>src/images/logos/logo-pcr.png" width="180" alt="">
                </a>
                <p class="text-center">Daftar Akun mu Sekarang!</p>
                <form class="user" method="POST" action="<?= base_url('Auth/register'); ?>" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" value="" class="form-control" placeholder="Email">
                    <?= form_error('email', '<small class = "text-danger pl-3">', '</small>') ?>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Ulangi Password</label>
                    <input id="password2" name="password2" type="password" class="form-control"
                      placeholder="Re-enter Password">
                  </div>
                  <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah Punya Akun?</p>
                    <a class="text-primary fw-bold ms-2" href="<?= base_url('Auth') ?>">Login Disini!</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
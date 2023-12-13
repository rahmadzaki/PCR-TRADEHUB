<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Buat Akun</h4>
                            </div>
                            <div class="card-body">
<form class="user" method="POST" action="<?= base_url('user/regis'); ?>">
<div class="input-group input-group-outline my-3">
        <label class="form-label">Nama Lengkap</label>
        <input name="nama" type="text" id="nama" value="<?= set_value('nama'); ?>" class="form-control">
        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
    </div>
    <?= form_error('email','<small class = "text-danger pl-3">', '</small>') ?>
    <div class="input-group input-group-outline my-3">
        <label class="form-label">Email</label>
        <input name="email" type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" >
    </div>
    <div class="input-group input-group-outline mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control form-control-user" value="<?= set_value('password'); ?>">
    </div>
    <div class="input-group input-group-outline mb-3">
        <label class="form-label">Ulangi Password</label>
        <input name="password2" type="password" class="form-control form-control-user" value="<?= set_value('password2'); ?>">
    </div>
    <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
</div>
</form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('User') ?>">Sudah Punya Akun? Login Disini!</a>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Already have an account?
                                    <a href="<?= base_url('user/login'); ?>"
                                        class="text-primary text-gradient font-weight-bold">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray 800"><?= $judul?></h1>
    <div clas="card mb-3" style="max-width: 5400px;">
        <div class="row no gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/assets/img/profile/'). $user['gambar']?>" class="card-img" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-tittle"><?= $user['nama'];?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">anggota sejak <?= date('d F Y',$user['date_created']); ?> </small></p>
                </div>
            </div>

        </div>

    </div>

</div>
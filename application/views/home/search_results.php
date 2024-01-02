
<div class="container-fluid">
    <?php if (!empty($search_results)): ?>
        <div class="card mb-3" style="max-width: 540px;">
            <?php foreach ($search_results as $result): ?>
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('gambar/' . $result['gambar']); ?>" class="card-img-top rounded-0" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                Nama Barang :
                                <?= $result['nama'] ?>
                            </h5>
                            <p class="card-title">
                                Harga Barang :
                                <?= $result['harga'] ?>
                            </p>
                            <p class="card-title">
                                Keterangan :
                                <?= $result['detail'] ?>
                            </p>
                            <!-- <p class="card-title"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>
</div>
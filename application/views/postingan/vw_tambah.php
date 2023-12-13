<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Apa yang mau anda jual?
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Postingan/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Barang</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <input type="text" name="detail" class="form-control" id="detail" placeholder="Detail">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Upload Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Gambar">
                        </div>
                        <br>
                        <a href="<?= base_url('Postingan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Posting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
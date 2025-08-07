<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-primary">
                    <div class="card-header">
                        <h1 class="card-title">Silahkan Isi Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('/anggota/simpan'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="kode" class="form-label">Nik</label>
                                <input type="text" name="nik" class="form-control" id="nik">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            </div>
                            <button class="btn btn-primary " type="submit">Simpan</button>
                            <a href="<?= base_url('/anggota'); ?>" class="btn btn-secondary">Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
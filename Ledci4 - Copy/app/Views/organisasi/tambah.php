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
                        <form action="<?= base_url('/organisasi/simpan');?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="kode" class="form-label">Kode</label>
                                <input type="text" name="kode" class="form-control" id="exampleFormControlInput1"
                            </div>
                            <div class="mb-3">
                                <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
                                <input type="text" name="kode" class="form-control" id="exampleFormControlInput1"
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary " type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
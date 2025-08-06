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
                        <form action="<?= base_url('/kegiatan/simpan'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="judul_kegiatan" class="form-label">Judul Kegiatan</label>
                                <input type="text" name="judul_kegiatan" class="form-control" id="judul_kegiatan">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" id="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
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
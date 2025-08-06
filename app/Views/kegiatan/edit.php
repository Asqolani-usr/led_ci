<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Kegiatan</h1>

    <form action="<?= base_url('kegiatan/update/' . ($kegiatan->id ?? '')); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group mb-3">
            <label for="nik">Judul Kegiatan</label>
            <input type="text" name="judul_kegiatan" id="judul_kegiatan" class="form-control" value="<?= esc($kegiatan->judul_kegiatan ?? ''); ?>"
                required>
        </div>

        <div class="form-group mb-3">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= esc($kegiatan->tanggal ?? ''); ?>"
                required>
        </div>

        <div class="form-group mb-3">
            <label for="alamat">lokasi</label>
            <textarea name="lokasi" id="lokasi" class="form-control" rows="4"
                required><?= esc($kegiatan->lokasi ?? ''); ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="jenis_kelamin">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                value="<?= esc($kegiatan->deskripsi ?? ''); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('kegiatan'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
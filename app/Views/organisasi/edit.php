<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Organisasi</h1>

    <form action="<?= base_url('organisasi/update/' . ($organisasi->id ?? '')); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group mb-3">
            <label for="kode">Kode Organisasi</label>
            <input type="text" name="kode" id="kode" class="form-control" value="<?= esc($organisasi->kode ?? ''); ?>"
                required>
        </div>

        <div class="form-group mb-3">
            <label for="nama">Nama Organisasi</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= esc($organisasi->nama ?? ''); ?>"
                required>
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4"
                required><?= esc($organisasi->deskripsi ?? ''); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('organisasi'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?= $this->endSection(); ?>
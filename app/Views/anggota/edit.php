<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Anggota</h1>

    <form action="<?= base_url('anggota/update/' . ($anggota->id ?? '')); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group mb-3">
            <label for="nik">Nik</label>
            <input type="text" name="nik" id="nik" class="form-control" value="<?= esc($anggota->nik ?? ''); ?>"
                required>
        </div>

        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= esc($anggota->nama ?? ''); ?>"
                required>
        </div>

        <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="4"
                required><?= esc($anggota->alamat ?? ''); ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                value="<?= esc($anggota->jenis_kelamin ?? ''); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('anggota'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>
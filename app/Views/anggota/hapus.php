<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Anggota</h1>
    <form action="<?= base_url('anggota/hapus/' . $item->id); ?>" method="post"
        onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display:inline;">
        <?= csrf_field(); ?>
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</div>
<?= $this->endSection(); ?>
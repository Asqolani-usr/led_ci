<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <form action="<?= base_url('kegiatan/hapus/' . $item->id); ?>" method="post"
        onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display:inline;">
        <?= csrf_field(); ?>
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</div>
<?= $this->endSection(); ?>
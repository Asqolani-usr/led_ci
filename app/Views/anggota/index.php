<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel</h1>
    <p class="mb-4">
        Kelola data Anggota kamu di sini. Semua bisa diatur langsung dari tabel ini.
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data Anggota
                </h6>
                <a href="<?= base_url('anggota/tambah'); ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th style="width: 10%;">Nik</th>
                            <th style="width: 25%;">Nama</th>
                            <th style="width: 40%;">Alamat</th>
                            <th style="width: 40%;">Jenis Kelamin</th>
                            <th class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($anggota as $key => $row) { ?>
                            <tr>
                                <td class="text-center"><?= $key + 1 ?></td>
                                <td><?= $row->nik ?></td>
                                <td>
                                    <div class="text-wrap" style="max-width: 200px;">
                                        <?= $row->nama ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-wrap" style="max-width: 300px;">
                                        <?= $row->alamat ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-wrap" style="max-width: 300px;">
                                        <?= $row->jenis_kelamin ?>
                                    </div>
                                </td>
                                <td class="text-center mx-8">
                                    <div class="btn-group" role="group" aria-label="Action buttons">
                                        <a href="<?= base_url('anggota/edit/' . $row->id) ?>" class="btn btn-warning btn-sm"
                                            data-toggle="tooltip" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                            <span class="d-none d-md-inline"> Edit</span>
                                        </a>
                                        <form method="post" action="<?= base_url('anggota/hapus/' . $row->id) ?>"
                                            class="d-inline"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <?= csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                title="Hapus Data">
                                                <i class="fas fa-trash"></i>
                                                <span class="d-none d-md-inline"> Hapus</span>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <nav class="container-fluid" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="<?= base_url('anggota') ?>">Sebelumnya</a>
                </li>
                <li class="page-item"><a class="page-link" href="<?= base_url('organisasi') ?>">1</a></li>
                <li class="page-item"><a class="page-link" href="<?= base_url('organisasi') ?>">2</a></li>
                <li class="page-item"><a class="page-link" href="<?= base_url('organisasi') ?>">3</a></li>
                <li class="page-item"><a class="page-link" href="<?= base_url('organisasi') ?>">Selanjutnya</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- End of Main Content -->



<!-- Custom CSS for better responsiveness -->
<style>
    /* Mobile responsive improvements */
    @media (max-width: 768px) {
        .table-responsive {
            border: none;
        }

        #dataTable th,
        #dataTable td {
            font-size: 0.875rem;
            padding: 0.5rem 0.25rem;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .btn-group .btn {
            border-radius: 0.25rem !important;
            margin-bottom: 2px;
        }

        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
        }
    }

    @media (min-width: 769px) {
        .btn-group .btn {
            margin-right: 2px;
        }

        .btn-group .btn:last-child {
            margin-right: 0;
        }
    }

    /* Improve table appearance */
    .table th {
        vertical-align: middle;
        background-color: #f8f9fc;
        border-color: #e3e6f0;
    }

    .table td {
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fc;
    }

    /* Action buttons styling */
    .btn-group .btn {
        white-space: nowrap;
    }

    .btn-sm {
        font-size: 0.775rem;
    }
</style>


<?= $this->endSection(); ?>
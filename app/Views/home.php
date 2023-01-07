<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= base_url('/home/tambah'); ?>" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Mahasiswa</span>
    </a>

    <br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($mahasiswa as $row) : ?>
                            <tr>
                                <td><?php echo $row->nrp; ?></td>
                                <td><?php echo $row->nama_mahasiswa; ?></td>
                                <td><?php echo $row->nama_prodi; ?></td>
                                <td><?php echo $row->semester; ?></td>
                                <td><?php echo $row->kelas; ?></td>
                                <td><?php echo $row->tahun_angkatan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>
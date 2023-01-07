<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Mahasiswa</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url(); ?>/home/editmahasiswa/<?= $detail->nrp; ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                </span>
                <span class="text">Edit Data Mahasiswa</span>
            </a>

            <div class="container mt-4">
                <div class="row">
                    <div class="col-2">
                        NRP
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col">
                        <?= $detail->nrp; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Nama Mahasiswa
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col">
                        <?= $detail->nama_mahasiswa; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Prodi
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col">
                        <?= $detail->nama_prodi; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Semester
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col">
                        <?= $detail->semester; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Kelas
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col">
                        <?= $detail->kelas; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Tahun Angkatan
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col">
                        <?= $detail->tahun_angkatan; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
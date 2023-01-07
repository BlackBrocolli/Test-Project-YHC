<?= $this->extend('templates/index') ?>

<?= $this->section('page-content') ?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Mahasiswa</h6>
        </div>

        <div class="card-body">

            <?php if (session()->has('errors')) : ?>
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?= form_open('/home/updatemahasiswa/' . $edit->nrp) ?>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NRP</label>
                <input class="form-control" type="text" value="<?= $edit->nrp; ?>" aria-label="readonly input example" readonly>
            </div>

            <div class="mb-3">
                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                <input class="form-control" type="text" value="<?= $edit->nama_mahasiswa; ?>" name="nama_mahasiswa" autocomplete="off">
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="select_prodi">Program Studi</label>
                    <select class="form-control" id="select_prodi" name="select_prodi">
                        <?php
                        foreach ($prodi as $row) : ?>
                            <option value="<?php echo $row->id_prodi; ?>" <?php echo ($row->id_prodi == $edit->id_prodi) ? 'selected' : '' ?>><?php echo $row->nama_prodi; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input class="form-control" type="text" value="<?= $edit->semester; ?>" name="semester" autocomplete="off">
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <label for="select_kelas">Kelas</label>
                    <select class="form-control" id="select_kelas" name="select_kelas">
                        <option value="Reguler" <?php echo ($edit->kelas == 'Reguler') ? 'selected' : '' ?>>Reguler</option>
                        <option value="Profesional" <?php echo ($edit->kelas == 'Profesional') ? 'selected' : '' ?>>Profesional</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input class="form-control" type="text" value="<?= $edit->tahun_angkatan; ?>" name="angkatan" autocomplete="off">
            </div>

            <button class="btn btn-primary">Save</button>
            <a href="<?= base_url(); ?>/home">Cancel</a>

            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
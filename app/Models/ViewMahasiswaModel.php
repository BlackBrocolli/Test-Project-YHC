<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewMahasiswaModel extends Model
{
    protected $table      = 'view_mahasiswa';
    protected $primaryKey = 'nrp';
    protected $returnType     = 'object';
    protected $allowedFields = ['nrp', 'nama_mahasiswa', 'semester', 'nama_prodi', 'tahun_angkatan', 'kelas'];
    protected $useTimestamps = false;
}

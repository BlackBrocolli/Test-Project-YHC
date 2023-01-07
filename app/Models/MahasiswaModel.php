<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nrp';
    protected $returnType     = 'object';
    protected $allowedFields = ['nrp', 'nama_mahasiswa', 'semester', 'id_prodi', 'tahun_angkatan', 'kelas'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'nrp' => 'required',
        'nama_mahasiswa' => 'required',
        'semester' => 'required',
        'tahun_angkatan' => 'required',
    ];
}

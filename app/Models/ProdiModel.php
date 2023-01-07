<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table      = 'prodi';
    protected $primaryKey = 'id_prodi';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama_prodi'];
    protected $useTimestamps = false;
    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpeminatan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_peminatan';
    protected $primaryKey       = 'nisn';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    protected $peminatan;


    // paging tidak berfungsi
    public function getPeminatan($tahunPenerimaan){
        $this->peminatan  =NEW Mpeminatan;
        $syarat=[
            'year(tgl_daftar)'=>$tahunPenerimaan
        ];
        return $this->peminatan->where($syarat)->paginate(2);
    }
}

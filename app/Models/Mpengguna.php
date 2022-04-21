<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpengguna extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_pengguna';
    protected $primaryKey       = 'email';
    protected $useAutoIncrement = false;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email_pengguna','nama_pengguna','level_pengguna','status_pengguna'];

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
    protected $pengguna;

    public function getPengguna($username,$password){
        $this->pengguna = NEW Mpengguna;
        $syarat=[
            'email_pengguna'=>$username,
            'password_pengguna'=>md5($password)
        ];
        return $this->pengguna->where($syarat)->find();

    }


}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'judulHalaman' => 'Set Rekapitulasi Peminatan',
            'introTeks' => 'Untuk menampilkan rekapitulasi peminatan PPDB silahkan tentukan tahun pelaksanaan peminatan PPDB terlebih dahulu',
            'listTahun' => $this->peminatan->listTahunPeminatan()
        ];

        $validasi=[
            'pilihTahun'=>'required'
        ];

        if($this->validate($validasi)){
            
        }

        return view('admin/rekap-peminatan',$data);    
    }
}

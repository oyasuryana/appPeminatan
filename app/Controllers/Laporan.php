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
            $data['jurusan']=[
                'RPL'=>'Rekayasa Perangkat lunak',
                'TKJ'=>'Teknik Komputer dan Jaringan',
                'UPW'=>'Usaha Perjalanan Wisata',
                'AKL'=>'Akuntansi Keuangan dan Lembaga',
                'OTKP'=>'Otomatisasi Tatakelola Perkantoran',
                'BDP'=>'Bisnis Daring dan Pemasaran'
            ];

            $data['rekapPeminatanPilihan1']=$this->peminatan->rekapPeminatanPilihan1($this->request->getPost('pilihTahun'));

            $data['rekapPeminatanPilihan2']=$this->peminatan->rekapPeminatanPilihan2($this->request->getPost('pilihTahun'));
        }

        return view('admin/rekap-peminatan',$data);    
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Peminatan extends BaseController
{
    public function index()
    {
        

        $data = [
            'judulHalaman' => 'Data Peminatan',
            'introTeks' => 'Berikut ini data peminatan tahun '.date('Y'),
            'listPeminatan' => $this->peminatan->paginate(20,'peminatan'),
            'pager' => $this->peminatan->pager,
            'page' => $this->request->getVar('page_peminatan') ? $this->request->getVar('page_peminatan') : 1
        ];
        
        return view('admin/list-peminatan',$data);
        
    }
}

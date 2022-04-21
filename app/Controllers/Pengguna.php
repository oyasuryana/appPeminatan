<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pengguna extends BaseController
{
    public function index()
    {
        $validasiForm=[
            'txtEmail'=>'required',
            'txtPassword'=>'required'
        ];

        if($this->validate($validasiForm)){
            
            $data=$this->pengguna->getPengguna($this->request->getPost('txtEmail'),$this->request->getPost('txtPassword'));
            if(count($data)>0){
                
                $dataSession=[
                    'email' => $data[0]['email_pengguna'],
                    'nama' => $data[0]['nama_pengguna'],
                    'level' => $data[0]['level_pengguna'],
                    'sudahLogin'=> true
                ];
                session()->set($dataSession);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/')->with('pesan','<div class="alert alert-sm alert-warning">Username atau password salah</div>');
            }
        }

        return view('admin/form-login');
    }

    public function logout(){
        session()->destroy();

        return redirect()->to(base_url());

    }
}

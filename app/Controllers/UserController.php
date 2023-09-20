<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function profile($nama ="", $kelas="", $npm=""): string
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create(){
        return view('create_user');
    }

    public function store()
    {
        $nama = $this->request->getPost('nama');
        $kelas = $this->request->getPost('kelas');
        $npm = $this->request->getPost('npm');
        $data=[
            'nama'=>$nama,
            'kelas'=>$kelas,
            'npm'=>$npm
        ];
        // dd($data);
        return view('profile',$data);
    }

    

}

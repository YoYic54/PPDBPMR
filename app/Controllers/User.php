<?php

namespace App\Controllers;

use App\Models\UserModel;
class User extends BaseController
{
    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];
        return view('user/index', $data);
    }
    public function home()
    {
        $data = [
            'title' => 'BERANDA'
        ];
        return view('user/home', $data);
    }

    public function daftar()
    {
        session();
        $data = [
            'title' => 'Daftar',
            'validation' => \Config\Services::validation()
        ];
        return view('user/daftar', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!',
                ]
                ],
            'nomor' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => '{field} harus di isi!',
                    'decimal' => '{field} harus berupa angka'
                ]
            ]
        ])){
            $validation =\Config\Services::validation();
            return redirect()->to('/user/daftar')->withInput()->with('validation',$validation);
        }
        $this->userModel->save([
            'nama' =>$this->request->getVar('nama'),
            'kelas' =>$this->request->getVar('kelas'),
            'nomor' =>$this->request->getVar('nomor'),
        ]);
        return redirect()->to('/user/thanks');
    }

    public function thanks()
    {
        $data = [
            'title' => 'Terimakasih'
        ];
        return view('user/thanks', $data);
    }
}

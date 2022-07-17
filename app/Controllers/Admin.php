<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new UserModel();
    }
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('auth/login', $data);
    }
    public function index()
    {
        $siswa = $this->komikModel->findAll();
        $data = [
            'title' => 'Admin Dashboard',
            'siswa' => $siswa
        ];

        return view('admin/index', $data);
    }
    public function delete($id)
    {
        $this->komikModel->delete($id);

        return redirect()->to("/admin/index");
    }
}

<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('auth/login', $data);
    }
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard'
        ];
        return view('admin/index', $data);
    }
}

<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];
        return view('user/index', $data);
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar'
        ];
        return view('user/daftar', $data);
    }
}

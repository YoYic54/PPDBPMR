<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'siswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama','kelas','nomor'];
}

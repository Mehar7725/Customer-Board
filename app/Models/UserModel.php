<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    protected $table = 'users';
    protected $allowedFields = ['name','email','phone','password','admin','borded','note','ad_note'];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'User';
    protected $allowedFields = [
        'mobilenumber',
        'email',
        'username',
        'firstName',
        'lastName',
        'addres',
        'password'
    ];
}

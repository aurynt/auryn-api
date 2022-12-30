<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'Student';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'firstName',
        'lastName',
        'nis',
        'absen',
        'addres',
        'hobby',
        'dreams',
        'class',
        'photo',
        'major',
        'gender'
    ];
}

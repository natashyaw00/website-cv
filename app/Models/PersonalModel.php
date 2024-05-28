<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table = 'personal_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'phone', 'city', 'birthday', 'email', 'freelance'];
}    

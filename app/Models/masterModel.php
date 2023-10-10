<?php

namespace App\Models;

use CodeIgniter\Model;

class masterModel extends Model

{
    protected $table = "master";
    protected $primaryKey = "username";
    protected $allowedFields = ['password', 'pertanyaan'];
}

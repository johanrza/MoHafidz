<?php

namespace App\Models;

use CodeIgniter\Model;

class pengajarModel extends Model

{
    protected $table = "pengajar";
    protected $primaryKey = "id_pengajar";
    protected $allowedFields = ['nama', 'username', 'password', 'gelar', 'foto'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class santriModel extends Model

{
    protected $table = "santri";
    protected $primaryKey = "id_santri";
    protected $allowedFields = ['nama', 'alamat', 'wali', 'tanggal_lahir', 'kelas', 'foto', 'input_oleh', 'tgl_input'];
}

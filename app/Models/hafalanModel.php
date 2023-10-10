<?php

namespace App\Models;

use CodeIgniter\Model;

class hafalanModel extends Model

{
    protected $table = "hafalan";
    protected $primaryKey = "id_hafalan";
    protected $allowedFields = ['id_santri', 'jenis', 'tanggal', 'surat', 'ayat_awal', 'ayat_akhir', 'keterangan_s', 'murojaah', 'keterangan_m'];
}

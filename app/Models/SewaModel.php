<?php

namespace App\Models;

use CodeIgniter\Model;

class SewaModel extends Model
{
    protected $table = 'sewa';
    protected $primaryKey = 'id_sewa';
    protected $allowedFields = [
        'motor', 'nama', 'lokasi_jemput', 'nomorhandphone',
        'tglsewa', 'tglkembali', 'kode_booking', 'plat_motor',
        'status', 'bukti_bayar', 'bank', 'harga', 'id_motor', 'id_pengguna'
    ];
    protected $returnType = 'App\Entities\Sewa';
    protected $useTimestamps = false;
}

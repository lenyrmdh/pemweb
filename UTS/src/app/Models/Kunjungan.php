<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $fillable = ['pasien_id', 'tanggal_kunjungan', 'keluhan', 'tindakan_awal'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function riwayatMedis()
    {
        return $this->hasOne(RiwayatMedis::class);
    }
}


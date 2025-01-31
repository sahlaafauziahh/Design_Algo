<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPerjalanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'supir_id',
        'tanggal_perjalanan',
        'tujuan',
        'durasi',
        'keterangan'
    ];

    public function Supir()
    {
        return $this->belongsTo(Supir::class);
    }
}

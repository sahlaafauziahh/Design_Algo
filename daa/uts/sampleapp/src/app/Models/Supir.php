<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal lahir',
        'no_hp',
        'alamat',
        'status', // Status supir yang bersedia / tidak
    ];

    public function riwayatPerjalanan()
    {
        return $this->hasMany(RiwayatPErjalanan::class);
    }
}

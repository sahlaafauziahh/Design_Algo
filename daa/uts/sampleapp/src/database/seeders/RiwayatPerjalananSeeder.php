<?php

namespace Database\Seeders;

use App\Models\RiwayarPerjalanan;
use App\Models\Supir;
use Illuminate\Database\Seeder;

class RiwayatPerjalananSeeder extends Seeder
{
    public function run()
    {
        Supir::all()->each(function($supir)) {
            RiwayatPerjalanan::factory()->count(5)->create([
                'supir_id' => $supir->id,
            ]);
        };
    }
}
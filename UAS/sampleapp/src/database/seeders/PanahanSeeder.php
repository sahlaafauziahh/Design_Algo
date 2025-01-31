<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Panahan::create([
            'level' => 'Pemula',
            'technical_skill_score' => 40,
            'mental_focus_score' => 30,
            'strategy_tactics_score' => 15,
            'competitive_performance_score' => 15,
            'total_score' => 100
        ]);

        Panahan::create([
            'level' => 'Menengah',
            'technical_skill_score' => 50,
            'mental_focus_score' => 40,
            'strategy_tactics_score' => 20,
            'competitive_performance_score' => 20,
            'total_score' => 130
        ]);
    }
}

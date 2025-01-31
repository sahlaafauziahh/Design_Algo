<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::create([
            ['nama' => 'Adidas', 'harga' => 1000, 'kategori' => 'sepatu'],
            ['nama' => 'Nike', 'harga' => 999, 'kategori' => 'sepatu'],
            ['nama' => 'Levis', 'harga' => 500, 'kategori' => 'celana'],
            ['nama' => 'Uniqlo', 'harga' => 100, 'kategori' => 'baju'],
        ]);
    }
}

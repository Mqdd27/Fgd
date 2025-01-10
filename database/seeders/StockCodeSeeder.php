<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Stockdata = [
            [
                [
                'stock_code' => 'Pengguna',
                'email' => 'pengguna@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
            ],
            ]
        ]

    }
}

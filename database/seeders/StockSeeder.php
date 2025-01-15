<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    public function run()
    {
        // Pastikan stockCodes didefinisikan
        $stockCodes = [
            'ABC123',
            'DEF456',
            'GHI789'
        ];

        foreach ($stockCodes as $code) {
            Stock::create([
                'stock_code' => $code,
                'description' => 'Description for ' . $code,
                'item_name' => 'Example Item',  // Berikan nilai untuk item_name
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\StockCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockCodeSeeder extends Seeder
{
    public function run(): void
    {
        $stockdata = [
            [
                'stock_code' => '000026583',
                'price_code' => 'FP',
                'item_name' => "COAT, MAN'S",
                'class' => 'A',
                'current_class' => 'A',
                'mnemonic_current' => 'TABASA',
                'pn_current' => 'RAIN COAT',
                'pn_global' => 'RAIN COAT',
                'wh' => 'SPUT',
                'uoi' => 'EACH'
            ],
            [
                'stock_code' => '000312207',
                'price_code' => 'FP',
                'item_name' => 'LUBRICATING OIL,MINERAL,STEAM CYLINDER',
                'class' => 'I',
                'current_class' => 'I',
                'mnemonic_current' => 'PERTAMIN',
                'pn_current' => 'MEDTIRAN SX  CI-4',
                'pn_global' => 'MEDTIRAN SX  CI-4',
                'wh' => 'OTS1',
                'uoi' => 'LITR'
            ],
            [
                'stock_code' => '000269548',
                'price_code' => 'FP',
                'item_name' => 'LUBRICATING OIL, HYDRAULIC',
                'class' => 'I',
                'current_class' => 'I',
                'mnemonic_current' => 'PERTAMIN',
                'pn_current' => 'TURALIK-XT46',
                'pn_global' => 'TURALIK-XT46',
                'wh' => 'OTS1',
                'uoi' => 'LITR'
            ],
            [
                'stock_code' => '000005009',
                'price_code' => 'FP',
                'item_name' => 'LUBRICATING OIL, GEAR',
                'class' => 'I',
                'current_class' => 'I',
                'mnemonic_current' => 'PERTAMIN',
                'pn_current' => 'SAE30 MEDITRAN',
                'pn_global' => 'SAE30 MEDITRAN',
                'wh' => 'OTS1',
                'uoi' => 'LITR'
            ],
            [
                'stock_code' => '000030635',
                'price_code' => 'FP',
                'item_name' => 'O RING',
                'class' => 'G',
                'current_class' => 'G',
                'mnemonic_current' => 'KOMATSU',
                'pn_current' => 'Duplikasi Pref',
                'pn_global' => '07002-03634',
                'wh' => 'UTVH',
                'uoi' => 'EACH'
            ],
            [
                'stock_code' => '000313726',
                'price_code' => 'FP',
                'item_name' => 'O-RING',
                'class' => 'G',
                'current_class' => 'G',
                'mnemonic_current' => 'KOMATSU',
                'pn_current' => '723-46-41950',
                'pn_global' => '723-46-41950',
                'wh' => 'UTVH',
                'uoi' => 'EACH'
            ],
            [
                'stock_code' => '000477547',
                'price_code' => 'FP',
                'item_name' => 'SCOTCHLITE RED',
                'class' => 'P',
                'current_class' => 'P',
                'mnemonic_current' => '3M',
                'pn_current' => '610-72,600X45700',
                'pn_global' => '610-72,600X45700',
                'wh' => 'SPUT',
                'uoi' => 'ROLL'
            ],
            [
                'stock_code' => '000477521',
                'price_code' => 'FP',
                'item_name' => 'SCOTCHLITE WHITE',
                'class' => 'P',
                'current_class' => 'P',
                'mnemonic_current' => '3M',
                'pn_current' => '610-10,600X45700',
                'pn_global' => '610-10,600X45700',
                'wh' => 'SPUT',
                'uoi' => 'ROLL'
            ],
            [
                'stock_code' => '000352302',
                'price_code' => 'FP',
                'item_name' => 'CAB CORNER',
                'class' => 'G',
                'current_class' => 'G',
                'mnemonic_current' => 'SCANIA',
                'pn_current' => '2165863',
                'pn_global' => '2165863',
                'wh' => 'UTVH',
                'uoi' => 'EACH'
            ]
        ];

        foreach ($stockdata as $key => $val) {
            StockCode::create($val);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name'=>'Samsung mobile',
            'price'=>'100',
            'description'=>'A smart phone with 8gb RAM and much more futures.',
            'category'=>'mobile',
            'gallery'=>'https://www.grooves.land/images/dgh/610745_00.jpg'
        ],
        [
            'name'=>'Tecno Mobile',
            'price'=>'333',
            'description'=>'A tecno phone with 4gb RAM and much more futures.',
            'category'=>'car',
            'gallery'=>'https://www.grooves.land/images/dgh/610745_00.jpg'
        ],
        [
            'name'=>'Nokia Mobile',
            'price'=>'124',
            'description'=>'A TV much more futures.',
            'category'=>'tv',
            'gallery'=>'https://www.grooves.land/images/dgh/610745_00.jpg'
        ],
        [
            'name'=>'LG Fridge',
            'price'=>'541',
            'description'=>'A fridge much more futures.',
            'category'=>'fridge',
            'gallery'=>'https://www.grooves.land/images/dgh/610745_00.jpg'
        ]
        ]


    );

    }
}

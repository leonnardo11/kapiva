<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            ['name'=>'Oppo mobile',
                                    'price'=>'3000',
                                    'description'=>'um smartphone com 8gb e muito mais',
                                    'category'=>'mobile',
                                    'gallery'=>'https://m.media-amazon.com/images/I/71KCwNV6MuL._SL1500_.jpg'
        
        ],
        ['name'=>'Panasonic Tv',
                                    'price'=>'4000',
                                    'description'=>'uma tv smart com muito mais feature',
                                    'category'=>'tv',
                                    'gallery'=>'https://d1yqp2wh5dxeva.cloudfront.net/Custom/Content/Products/98/96/989689_tv-led-32-hd-panasonic-tc-32f400b-2-hdmi-usb-conversor-digital_l5_637012965927176363.jpg'
        
        ],
        ['name'=>'Sony Tv',
                                    'price'=>'5000',
                                    'description'=>'uma tv smart com muito mais feature',
                                    'category'=>'tv',
                                    'gallery'=>'https://cdn.leroymerlin.com.br/products/smart_tv_led_32_polegadas_com_wi_fi_kdl32w655dz_sony_1567078147_af59_600x600.jpeg'
        
        ],
        ['name'=>'Gelareira LG',
                                    'price'=>'5000',
                                    'description'=>'uma gelareira moderna',
                                    'category'=>'fridge',
                                    'gallery'=>'https://www.lg.com/br/images/geladeiras/md05770889/gallery/2_Gallery/N01_medium01.jpg'
        
        ]
        ]);  
    }
}

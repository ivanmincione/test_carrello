<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Hamburgher',
            'description' => 'Panini, hamburgher, insalata.',
            'photo' => 'https://it.seaicons.com/wp-content/uploads/2015/06/hamburger-icon.png',
            'price' => 7.50
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza',
            'description' => 'Pomodoro, mozzarella.',
            'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/10/85/24/c9/20170831-204928-largejpg.jpg',
            'price' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Carbonara',
            'description' => 'Spaghetti, guanciale, uova',
            'photo' => 'https://www.caligolapalermo.it/wp-content/uploads/2019/08/carbonara--256x256.jpg',
            'price' => 15
        ]);

        DB::table('products')->insert([
            'name' => 'Gelato',
            'description' => 'gelato al limone',
            'photo' => 'https://i.pinimg.com/474x/d3/b9/1b/d3b91b18d054a255c0a92efb6b40b63d.jpg',
            'price' => 3.50
        ]);

        DB::table('products')->insert([
            'name' => 'Cornetto',
            'description' => 'Cornetto al cioccolato.',
            'photo' => 'http://www.naturasurgelati.it/image/cache/catalog/prodotti/croissaint-256x256.jpg',
            'price' => 2
        ]);


    }
}

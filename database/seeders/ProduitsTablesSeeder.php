<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            'name' => 'MacBook Pro',
            'price' => 500,
            'description' => 'As good as new',
            'location'=> 'Nice',
            'image' => 'macbook_pro.jpg',
            'category_id'=> 1,
        ]);

        DB::table('produits')->insert([
            'name' => 'Acer',
            'price' => 300,
            'description' => 'As good as new',
            'location'=> 'Monaco',
            'image' => 'acer.jpg',
            'category_id'=> 1,
        ]);

        DB::table('produits')->insert([
            'name' => 'Ipad',
            'price' => 200,
            'description' => 'As good as new',
            'location'=> 'Nice',
            'image' => 'ipad.jpg',
            'category_id'=> 3,
        ]);

        DB::table('produits')->insert([
            'name' => 'TV',
            'price' => 600,
            'description' => 'As good as new',
            'location'=> 'Cannes',
            'image' => 'tv.jpg',
            'category_id'=> 4,
        ]);

        DB::table('produits')->insert([
            'name' => 'MacBook Air',
            'price' => 250,
            'description' => 'As good as new',
            'location'=> 'Nice',
            'image' => 'macbook_air.jpg',
            'category_id'=> 1,
        ]);

        DB::table('produits')->insert([
            'name' => 'Iphone',
            'price' => 550,
            'description' => 'As good as new',
            'location'=> 'Monaco',
            'image' => 'iphone.jpg',
            'category_id'=> 2,
        ]);

        DB::table('produits')->insert([
            'name' => 'TV LED',
            'price' => 800,
            'description' => 'As good as new',
            'location'=> 'Monaco',
            'image' => 'tv2.jpg',
            'category_id'=> 4,
        ]);

        DB::table('produits')->insert([
            'name' => 'Samsung Galaxy',
            'price' => 300,
            'description' => 'As good as new',
            'location'=> 'Cannes',
            'image' => 'samsung.jpg',
            'category_id'=> 2,
        ]);

        DB::table('produits')->insert([
            'name' => 'Tablet Samsung',
            'price' => 100,
            'description' => 'As good as new',
            'location'=> 'Nice',
            'image' => 'tablette.jpg',
            'category_id'=> 3,
        ]);
    }
}

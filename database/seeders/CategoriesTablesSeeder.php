<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Computer',
            'is_online'=> 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Phone',
            'is_online'=> 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Tablet',
            'is_online'=> 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Television',
            'is_online'=> 1,
        ]);
    }
}

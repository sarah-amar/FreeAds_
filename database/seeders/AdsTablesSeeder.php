<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ads')->insert([
            'title' => 'IMac',
            'price' => 1000,
            'description' => 'Not available',
            'location'=> 'Monaco',
        ]);
    }
}

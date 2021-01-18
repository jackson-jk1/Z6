<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Customers;
use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'elos/iron_iv.png',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/iron_iii.png',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/iron_ii.png',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/iron_i.png',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/bronze_iv.png',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Bronze']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/bronze_iii.png',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Bronze']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/bronze_ii.png',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Bronze']
        ]);
        DB::table('products')->insert([
            'name' => 'elos/bronze_i.png',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Bronze']
        ]);

    }
}

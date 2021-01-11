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
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[1],
            'division' => Products::DIVISION[5] ,
            'value' => Products::VALUES_JOB['Ferro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Prata']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Prata']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Prata']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Prata']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[2],
            'division' => Products::DIVISION[5] ,
            'value' => Products::VALUES_JOB['Prata']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[3],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Ouro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[3],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Ouro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[3],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Ouro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[3],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Ouro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[3],
            'division' => Products::DIVISION[5] ,
            'value' => Products::VALUES_JOB['Ouro']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[4],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Platina']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[4],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Platina']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[4],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Platina']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[4],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Platina']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[4],
            'division' => Products::DIVISION[5] ,
            'value' => Products::VALUES_JOB['Platina']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[5],
            'division' => Products::DIVISION[1] ,
            'value' => Products::VALUES_JOB['Diamante']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[5],
            'division' => Products::DIVISION[2] ,
            'value' => Products::VALUES_JOB['Diamante']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[5],
            'division' => Products::DIVISION[3] ,
            'value' => Products::VALUES_JOB['Diamante']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[5],
            'division' => Products::DIVISION[4] ,
            'value' => Products::VALUES_JOB['Diamante']
        ]);
        DB::table('products')->insert([
            'name' => 'SELOIRO',
            'rank' => Products::ELOS[5],
            'division' => Products::DIVISION[5] ,
            'value' => Products::VALUES_JOB['Diamante']
        ]);

    }
}

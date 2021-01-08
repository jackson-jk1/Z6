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
            'rank' => Products::VALUES_JOB['Prata'],
            'division' =>  'V',
            'value' => 5
        ]);
    }
}

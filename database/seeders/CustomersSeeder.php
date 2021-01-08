<?php

namespace Database\Seeders;
use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'status' => 'RE',
            'nick' => Str::random(10),
            'division_now' => 'Prata',
            'division_job' => 'Platina',
            'id_customer' => 1,
            'phone'=> '4002-8922',

        ]);
    }
}

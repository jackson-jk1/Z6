<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'id_product',
        'id_customers',
        'id_booster',
        'value',
        'promotion',
        'division_now',
        'division_job',
        ];

    public function customers_jobs(){
    return $this->hasMany('App\Models\CustomerJobs')->
        select(\DB::raw('id_product , sum(value) as values, cont(1) as qtd')
    ->groupBy('id_product'));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerJobs extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\Products','id_product', 'id');
    }

    public function service(){
        return $this->belongsTo('App\Models\Customers','id_customers', 'id');
    }
}

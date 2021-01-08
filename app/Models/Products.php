<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model

{
    use HasFactory;

    const VALUES_JOB = [
        'Ferro' => 3,
        'Prata' => 5,
        'Ouro' =>15,
        'Platina' =>20,
        'Diamante'=>30,
        'Mestre' =>60,
    ];
    protected $fillable = [

        'value',
        'rank',
        'division',
        'name'
    ];
}

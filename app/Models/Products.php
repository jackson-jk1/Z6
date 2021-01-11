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
    ];
    const ELOS = [
       1 => 'Ferro',
       2 => 'Prata',
       3=> 'Ouro',
       4=> 'Platina',
       5=> 'Diamante',
    ];

    const DIVISION = [
        1 => 'V',
        2 => 'IV',
        3=> 'III',
        4=> 'II',
        5=> 'I',
    ];
    protected $fillable = [

        'value',
        'rank',
        'division',
        'name'
    ];
}

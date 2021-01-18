<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model

{
    use HasFactory;

    const VALUES_JOB = [
        'Ferro' => 3,
        'Bronze' => 5,
        'Prata' => 10,
        'Ouro' =>15,
        'Platina' =>20,
        'Diamante'=>30,
    ];
    const ELOS = [
       1 => 'Ferro',
        2 => 'Bronze',
       3 => 'Prata',
       4=> 'Ouro',
       5=> 'Platina',
       6=> 'Diamante',
    ];

    const DIVISION = [

        1 => 'IV',
        2=> 'III',
        3=> 'II',
        4=> 'I',
    ];
    protected $fillable = [

        'value',
        'rank',
        'division',
        'name',
        'path'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranks extends Model

{
    const RANK_STATUS = [
        1 => 'Ferro',
        2 => 'Prata',
        3 => 'Ouro',
        4 => 'Platina',
        5 => 'Diamante',
        6 => 'Mestre',
        7 => 'Grão-Mestre',
        8 => 'Desafiante'

    ];


}

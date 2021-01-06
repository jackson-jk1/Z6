<?php

namespace App\Models;

use App\Notifications\UserCreate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Password;

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

    const RANK_DIVISION = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
    ];

    public static function createFully($data){

        $user = parent::create($data);

        $user->save();
        return $user;

    }


}

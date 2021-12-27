<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercices extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'questions',
        'reponse',
        'mot_caché'
    ];
}

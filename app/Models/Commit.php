<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    use HasFactory;

    protected $table = 'commits';


    protected $fillable = [
        'name',
        'description_uz',
        'description_ru',
        'description_en',
        'image',
    ];
}

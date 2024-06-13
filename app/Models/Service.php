<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title_uz',
        'title_ru',
        'title_en',
        'text_uz',
        'text_ru',
        'text_en',
        'description_uz',
        'description_ru',
        'description_en',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

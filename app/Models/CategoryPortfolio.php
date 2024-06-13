<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPortfolio extends Model
{
    use HasFactory;

    protected $table = 'category_portfolios';

    protected $fillable = [
      'name_uz',
      'name_ru',
      'name_en',
    ];

    public function portfolio()
    {
        return $this->hasMany(Information::class);
    }
}

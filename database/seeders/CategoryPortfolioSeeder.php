<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_uz' => 'Veb-dizayn',
                'name_ru' => 'Веб-дизайн',
                'name_en' => 'Web design',
            ],
            [
                'name_uz' => 'Ilova dizayni',
                'name_ru' => 'Дизайн приложения',
                'name_en' => 'App design',
            ],
            [
                'name_uz' => 'Brend',
                'name_ru' => 'Бренд',
                'name_en' => 'Brand',
            ],
            [
                'name_uz' => 'Rivojlanadiganlari',
                'name_ru' => 'Разработка',
                'name_en' => 'Development',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('category_portfolios')->insert($category);
        }
    }
}

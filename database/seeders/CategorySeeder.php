<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategoriyalarni massiv ko'rinishida tuzamiz
        $categories = [
            [
                'name_uz' => 'Barcha turdagi chop etish',
                'name_ru' => 'Все виды печати',
                'name_en' => 'All types of printing',
            ],
            [
                'name_uz' => 'Ko\'rgazma dizayni',
                'name_ru' => 'Выставочный дизайн',
                'name_en' => 'Exhibition design',
            ],
            [
                'name_uz' => 'To\'liq nterra dizayni bilan binolarni rekonstruksiya qilish',
                'name_ru' => 'Реконструкция зданий с полным проектированием',
                'name_en' => 'Reconstruction of buildings with full nterra design',
            ],
            [
                'name_uz' => 'Mebel dizaynlari',
                'name_ru' => 'Дизайн мебели',
                'name_en' => 'Furniture designs',
            ],
            [
                'name_uz' => 'Reklama orollari',
                'name_ru' => 'Рекламные острова',
                'name_en' => 'Advertising islands',
            ],
            [
                'name_uz' => 'Mahsulot tokchalari',
                'name_ru' => 'Стеллажи для продуктов',
                'name_en' => 'Product racks',
            ],
            [
                'name_uz' => 'Tashqi reklama',
                'name_ru' => 'Наружная реклама',
                'name_en' => 'Outdoor advertising',
            ],
            [
                'name_uz' => 'Axborot belgilari va stendlari',
                'name_ru' => 'Информационные таблички и стенды',
                'name_en' => 'Information signs and stands',
            ],
        ];

        // Massivdagi har bir kategoriyani kiritish
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}

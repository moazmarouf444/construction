<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('introductions')->insert([
            'main_title' => 'شركة اعمار  رائدة في مجال التطوير العقاري من خلال طرح منتجات عقارية متنوعة تخدم كافة شرائح المجتمع',
            'sub_title' => 'طـرح آليـات جديـدة للاستثمار تواكب حاجات المجتمع وتناسب كافة شـرائحه',
            'description' => 'شركة متخصصة في مجال التطوير العقاري الشامل وتجنح في عملها إلى الابتكار والتفرد من وحي افكار طموحة ورؤية ثاقبة تستشرف المستقبل بخطى راسخة وتتطلع إلى الريادة وتطمح إلى ان تضيف تميزاً جديداً تفخر به ',
        ]);

    }
}

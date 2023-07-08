<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facts')->insert([
            'title' => 'سنة من الخبرات العملية للمهندسين',
            'number' => '25',
        ]);
        DB::table('facts')->insert([
            'title' => 'مشروع تم إنجازها خلال السنوات الخمس الأخيرة',
            'number' => '100',

        ]);
        DB::table('facts')->insert([
            'title' => 'مشروع قيد الإنشاء الأن',
            'number' => '10',
        ]);

        DB::table('facts')->insert([
            'title' => 'عميل ',
            'number' => '200',
        ]);

    }
}

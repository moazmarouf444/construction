<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            'question' => 'هل تبحث عن تصميمٍ مميزٍ يلبِّي طموحاتك؟',
        ]);
        DB::table('questions')->insert([
            'question' => 'هل تتطلَّع إلى بناء منزل أحلامك؟',
        ]);

    }
}

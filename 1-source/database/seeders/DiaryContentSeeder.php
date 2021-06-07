<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DiaryContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100000; $i++) {
            DB::table('diaries_contents')->insert([
                'diarycontent_weekday' => Str::random(10),
                'diarycontent_work' => Str::random(10),
                'diarycontent_content' => Str::random(10),
                'diarycontent_note' => Str::random(10),
                'diarycontent_teacher_comment' => Str::random(10),
                'diarycontent_trainer_comment' => Str::random(10),
                'week_id' => random_int(1,999)
            ]);
        }
    }
}

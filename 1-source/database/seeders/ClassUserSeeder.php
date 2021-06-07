<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ClassUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100000; $i++) {
            DB::table('classes_users')->insert([
                'user_id' => random_int(1,999),
                'class_id' => random_int(1,999),
                'teacher_id' => random_int(1,999)
            ]);
        }
    }
}

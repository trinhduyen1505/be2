<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000; $i++) {
            DB::table('courses')->insert([
                'course_name' => Str::random(10),
                'course_semester' => Str::random(10),
                'course_year' => Str::random(10)
            ]);
        }
    }
}

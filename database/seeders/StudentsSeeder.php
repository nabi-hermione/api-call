<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Kim Namjoon',
                'email' => 'namjoon@test.com',
                'course' => 'Bachelor of Arts in Broadcasting and Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kim Seok-jin',
                'email' => 'jin@test.com',
                'course' => 'Bachelor of Arts in Film Studies',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Min Yoongi',
                'email' => 'yoongi@test.com',
                'course' => 'Bachelor of Arts in Broadcasting and Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jung Hoseok',
                'email' => 'jhope@test.com',
                'course' => 'Bachelor of Arts in Broadcasting and Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Park Jimin',
                'email' => 'jimin@test.com',
                'course' => 'Bachelor of Arts in Broadcasting and Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kim Taehyung',
                'email' => 'taehyung@test.com',
                'course' => 'Bachelor of Arts in Broadcasting and Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeon Jungkook',
                'email' => 'jungkook@test.com',
                'course' => 'Bachelor of Arts in Broadcasting and Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

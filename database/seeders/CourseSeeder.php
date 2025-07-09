<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        
        Course::create(['name' => 'Pemrograman Web', 'code' => 'IF101', 'sks' => 3, 'user_id' => 1]);
        Course::create(['name' => 'Sistem Basis Data', 'code' => 'IF102', 'sks' => 3, 'user_id' => 1]);
        Course::create(['name' => 'Statistik Dan Probabilitas', 'code' => 'MT201', 'sks' => 2, 'user_id' => 1]);
        Course::create(['name' => 'UI IX Desainer', 'code' => 'UI101', 'sks' => 3, 'user_id' => 1]);
        Course::create(['name' => 'Pendidikan Pancasila Dan kewarganegaraan', 'code' => 'PK211', 'sks' => 2, 'user_id' => 1]);
        Course::create(['name' => 'Jaringan Komputer', 'code' => 'JK901', 'sks' => 3, 'user_id' => 1]);
        Course::create(['name' => 'Bahasa Inggeris 1', 'code' => 'BI601', 'sks' => 2, 'user_id' => 1]);
        Course::create(['name' => 'Komunikasi Efektif', 'code' => 'KE202', 'sks' => 2, 'user_id' => 1]);


        

    }

    }


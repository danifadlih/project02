<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder dalam urutan yang benar
        $this->call([
            UserSeeder::class,      // Harus di-seed duluan karena Schedule membutuhkan user_id
            CourseSeeder::class,
            RoomSeeder::class,
            LecturerSeeder::class,
            ScheduleSeeder::class,
        ]);
    }
}

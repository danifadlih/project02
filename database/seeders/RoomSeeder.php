<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::create(['name' => 'B101', 'location' => 'Gedung B', 'user_id' => 1]);
        Room::create(['name' => 'A202', 'location' => 'Gedung A', 'user_id' => 1]);
        Room::create(['name' => 'B204', 'location' => 'Gedung B', 'user_id' => 1]);
        Room::create(['name' => 'B203', 'location' => 'Gedung B', 'user_id' => 1]);
        Room::create(['name' => 'B201', 'location' => 'Gedung B', 'user_id' => 1]);
        Room::create(['name' => 'A105', 'location' => 'Gedung A', 'user_id' => 1]);
        Room::create(['name' => 'A205', 'location' => 'Gedung A', 'user_id' => 1]);
        Room::create(['name' => 'B302', 'location' => 'Gedung B', 'user_id' => 1]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lecturer;


class LecturerSeeder extends Seeder
{
    public function run(): void
    {
        Lecturer::create(['name' => 'Krisna panji, S,Kom.,M.M', 'nidn' => '0123456789', 'email' => 'panji@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Misna Asqia, S.Kom., M.Kom', 'nidn' => '9876543210', 'email' => 'misna@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Syaiful Romadhon, S.Kom', 'nidn' => '9876543211', 'email' => 'syaiful@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Maulana Fakih Latief, S.Si.,M.Si', 'nidn' => '9876543212', 'email' => 'maulana@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Krishadi Nugroho, S.S.,M.Si', 'nidn' => '9876543213', 'email' => 'kris@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Drs.Sapto Waluyo, M.Sc', 'nidn' => '9876543214', 'email' => 'sapto@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Akhmam Fahmi, S.Mat.,M.pd', 'nidn' => '9876543215', 'email' => 'fahmi@kampus.ac.id', 'user_id' => 1]);
        Lecturer::create(['name' => 'Edo Riansah, S.kom', 'nidn' => '9876543215', 'email' => 'edo@kampus.ac.id', 'user_id' => 1]);
    }
}

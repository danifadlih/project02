<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;
use App\Models\Course;
use App\Models\Lecturer;
use App\Models\Room;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data course, lecturer, dan room berdasarkan nama
        $pemweb     = Course::where('name', 'Pemrograman Web')->first();
        $basdat     = Course::where('name', 'Sistem Basis Data')->first();
        $statistikDanProbabilitas     = Course::where('name', 'Statistik Dan Probabilitas')->first();
        $uiux     = Course::where('name', 'UI IX Desainer')->first();
        $pkn    = Course::where('name', 'Pendidikan Pancasila Dan kewarganegaraan')->first();
        $jarkom    = Course::where('name', 'Jaringan Komputer')->first();
        $basgris    = Course::where('name', 'Bahasa Inggeris 1')->first();
        $komtif     = Course::where('name', 'Komunikasi Efektif')->first();



        $edo        = Lecturer::where('name', 'Edo Riansah, S.kom')->first();
        $akhmam        = Lecturer::where('name', 'Akhmam Fahmi, S.Mat.,M.pd')->first();
        $krishadi       = Lecturer::where('name', 'Krishadi Nugroho, S.S.,M.Si')->first();
        $sapto        = Lecturer::where('name', 'Drs.Sapto Waluyo, M.Sc')->first();
        $latief       = Lecturer::where('name', 'Maulana Fakih Latief, S.Si.,M.Si')->first();
        $syaiful       = Lecturer::where('name', 'Syaiful Romadhon, S.Kom')->first();
        $misna      = Lecturer::where('name', 'Misna Asqia, S.Kom., M.Kom')->first();
        $krisna       = Lecturer::where('name', 'Krisna panji, S,Kom.,M.M')->first();



        $r101       = Room::where('name', 'B101')->first();
        $r202       = Room::where('name', 'A202')->first();
        $r204       = Room::where('name', 'B204')->first();
        $r203       = Room::where('name', 'B203')->first();
        $r201       = Room::where('name', 'B201')->first();
        $r105     = Room::where('name', 'A105')->first();
        $r205       = Room::where('name', 'A205')->first();
        $r302      = Room::where('name', 'B302')->first();



        // Buat jadwal kuliah untuk Edo
        Schedule::create([
            'course_id'     => $pemweb?->id,
            'lecturer_id'   => $edo?->id,
            'room_id'       => $r101?->id,
            'day'           => 'Senin',
            'start_time'    => '08:00',
            'end_time'      => '10:00',
            'user_id'       => 1,
        ]);

        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $statistikDanProbabilitas?->id,
            'lecturer_id'   => $akhmam?->id,
            'room_id'       => $r202?->id,
            'day'           => 'Selasa',
            'start_time'    => '08:00',
            'end_time'      => '10:30',
            'user_id'       => 1,
        ]);
        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $basgris?->id,
            'lecturer_id'   => $krishadi?->id,
            'room_id'       => $r204?->id,
            'day'           => 'Selasa',
            'start_time'    => '13:00',
            'end_time'      => '16:00',
            'user_id'       => 1,
        ]);
        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $uiux?->id,
            'lecturer_id'   => $misna?->id,
            'room_id'       => $r203?->id,
            'day'           => 'Kamis',
            'start_time'    => '08:00',
            'end_time'      => '10:30',
            'user_id'       => 1,
        ]);
        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $basdat?->id,
            'lecturer_id'   => $syaiful?->id,
            'room_id'       => $r105?->id,
            'day'           => 'Kamis',
            'start_time'    => '13:00',
            'end_time'      => '15:00',
            'user_id'       => 1,
        ]);
        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $jarkom?->id,
            'lecturer_id'   => $latief?->id,
            'room_id'       => $r201?->id,
            'day'           => 'Jumat',
            'start_time'    => '08:00',
            'end_time'      => '10:30',
            'user_id'       => 1,

        ]);
        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $pkn?->id,
            'lecturer_id'   => $sapto?->id,
            'room_id'       => $r205?->id,
            'day'           => 'Jumat',
            'start_time'    => '14:00',
            'end_time'      => '15:00',
            'user_id'       => 1,
        ]);
        // Buat jadwal kuliah untuk Akhmam
        Schedule::create([
            'course_id'     => $komtif?->id,
            'lecturer_id'   => $krisna?->id,
            'room_id'       => $r302?->id,
            'day'           => 'Selasa',
            'start_time'    => '16:00',
            'end_time'      => '17:00',
            'user_id'       => 1,
        ]);
    }
}

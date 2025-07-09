<x-filament::page>
    <h2 class="text-2xl font-bold mb-4"> Statistik Sistem Akademik</h2>

    {{-- Ambil data di sini --}}
    @php
        $totalMataKuliah = \App\Models\Course::count();
        $totalDosen = \App\Models\Lecturer::count();
        $totalRuangan = \App\Models\Room::count();
    @endphp

    {{-- Kirim data ke Blade Widget --}}
    @include('filament.widgets.statistik-full-widget', [
        'totalMataKuliah' => $totalMataKuliah,
        'totalDosen' => $totalDosen,
        'totalRuangan' => $totalRuangan,
    ])
</x-filament::page>

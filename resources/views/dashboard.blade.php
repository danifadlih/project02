<x-filament::page>
    <h1 class="text-2xl font-bold mb-4">Selamat Datang di Jadwal Kuliah</h1>

    <div class="bg-white dark:bg-gray-800 shadow rounded p-4">
        <h2 class="text-lg font-semibold mb-2">Jadwal Kuliah Anda</h2>

        @if ($schedules->isEmpty())
            <p class="text-gray-400">Anda belum memiliki jadwal kuliah.</p>
        @else
            <table class="w-full text-left mt-4">
                <thead>
                    <tr class="border-b">
                        <th>Mata Kuliah</th>
                        <th>Kode MK</th>
                        <th>SKS</th>
                        <th>Dosen</th>
                        <th>Ruangan</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr class="border-b">
                            <td>{{ $schedule->course->name }}</td>
                            <td>{{ $schedule->course->code }}</td>
                            <td>{{ $schedule->course->sks }}</td>
                            <td>{{ $schedule->lecturer->name }}</td>
                            <td>{{ $schedule->room->name }}</td>
                            <td>{{ $schedule->day }}</td>
                            <td>{{ $schedule->start_time }} - {{ $schedule->end_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-filament::page>

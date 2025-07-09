<x-filament::page>
    <div class="flex items-center justify-between bg-gradient-to-r from-blue-700 to-blue-500 text-white p-6 rounded-xl shadow-xl mb-6">
        <div>
            <h2 class="text-3xl font-extrabold mb-1">📅 Jadwal Kuliah Anda</h2>
            <p class="text-sm text-blue-100">Berikut adalah jadwal kuliah yang sudah Anda pilih, diurutkan berdasarkan hari.</p>
        </div>
        <div class="flex items-center space-x-2 bg-white text-gray-800 px-4 py-2 rounded-lg shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.779.652 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="font-medium">{{ auth()->user()->name }}</span>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow space-y-4">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Daftar Jadwal Kuliah</h3>

        <div class="overflow-x-auto">
            <table class="min-w-full text-left border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden shadow">
                <thead class="bg-blue-600 text-white text-sm uppercase">
                    <tr>
                        <th class="px-4 py-3">Hari</th>
                        <th class="px-4 py-3">Kode MK</th>
                        <th class="px-4 py-3">Mata Kuliah</th>
                        <th class="px-4 py-3">SKS</th>
                        <th class="px-4 py-3">Dosen</th>
                        <th class="px-4 py-3">Ruangan</th>
                        <th class="px-4 py-3">Jam</th>
                        <th class="px-4 py-3 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 dark:text-gray-200">
                    @php
                        // Buat urutan hari manual
                        $dayOrder = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

                        // Urutkan data berdasarkan urutan hari
                        $sortedSchedules = $this->schedules->sortBy(function($schedule) use ($dayOrder) {
                            return array_search($schedule->day, $dayOrder);
                        });
                    @endphp

                    @forelse ($sortedSchedules as $schedule)
                        <tr class="hover:bg-blue-50 dark:hover:bg-gray-700 border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-3 font-semibold">{{ $schedule->day }}</td>
                            <td class="px-4 py-3 font-medium">{{ $schedule->course->code }}</td>
                            <td class="px-4 py-3">{{ $schedule->course->name }}</td>
                            <td class="px-4 py-3">{{ $schedule->course->sks }}</td>
                            <td class="px-4 py-3">{{ $schedule->lecturer->name }}</td>
                            <td class="px-4 py-3">{{ $schedule->room->name }}</td>
                            <td class="px-4 py-3">{{ $schedule->start_time }} - {{ $schedule->end_time }}</td>
                            <td class="px-4 py-3 text-center">
                                <span class="inline-flex items-center px-2 py-1 bg-green-500 text-white text-xs font-semibold rounded-full shadow">
                                    Terjadwal
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-3 text-center text-gray-500 dark:text-gray-300 italic">
                                Belum ada jadwal kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-filament::page>

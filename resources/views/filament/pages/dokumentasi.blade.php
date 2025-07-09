<x-filament::page>
    {{-- Header --}}
    <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h2 class="text-2xl font-bold text-black mb-1">🗓️ <span class="font-bold">Jadwal Kuliah Yang Harus Dipilih</span></h2>
        <p class="text-sm text-gray-800">
            Cek jadwal kuliah terbaru sebelum menyimpan jadwal Anda.
        </p>
    </div>

    {{-- Daftar Jadwal --}}
    <div class="space-y-4">
        <h3 class="text-lg font-bold text-black mb-4">Daftar Jadwal Kuliah</h3>

        @forelse ($this->schedules as $schedule)
            <div class="bg-white border border-gray-200 rounded-xl shadow p-6 flex flex-col gap-4">
                
                {{-- Isi Data --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-black">

                    <div>
                        <p class="text-sm text-gray-500 font-semibold">Mata Kuliah</p>
                        <p class="font-bold">{{ $schedule->course->name }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 font-semibold">Dosen</p>
                        <p class="font-bold">{{ $schedule->lecturer->name }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 font-semibold">Ruangan</p>
                        <p class="font-bold">{{ $schedule->room->name }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 font-semibold">Hari</p>
                        <p class="font-bold">{{ $schedule->day }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 font-semibold">Jam Mulai</p>
                        <p class="font-bold">{{ $schedule->start_time }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 font-semibold">Jam Selesai</p>
                        <p class="font-bold">{{ $schedule->end_time }}</p>
                    </div>

                </div>

                {{-- Status & Aksi --}}
                <div class="flex justify-end items-center gap-2 pt-4 flex-wrap">

                    {{-- Status --}}
                    <button class="flex items-center gap-2 border border-green-600 text-green-600 bg-green-400:bg-green-50 text-xs font-bold px-3 py-1 rounded-lg shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Aktif
                    </button>

                    {{-- Tombol Lihat Detail --}}
                    <x-filament::button color="success" icon="heroicon-o-eye" size="sm">
                        Lihat Detail
                    </x-filament::button>

                </div>

            </div>
        @empty
            <div class="bg-white border border-gray-200 rounded-xl shadow p-6 text-center text-gray-600">
                <span class="font-semibold">Belum ada jadwal yang tersedia.</span>
            </div>
        @endforelse
    </div>
</x-filament::page>

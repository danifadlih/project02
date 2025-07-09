<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Schedule;
use Illuminate\Support\Collection;

class DashboardMahasiswa extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static string $view = 'filament.pages.dashboard-mahasiswa';
    protected static ?string $navigationLabel = 'Jadwal Kuliah Saya';
    protected static ?string $title = 'Jadwal Kuliah Saya';

    public ?Collection $schedules = null;

    public function mount(): void
    {
        if (auth()->check() && auth()->user()->role === 'mahasiswa') {
            $this->schedules = Schedule::with(['course', 'lecturer', 'room'])
                ->where('user_id', auth()->id())
                ->get();
        } else {
            $this->schedules = collect(); // Kosongkan jika bukan mahasiswa
        }
    }

    public function render(): \Illuminate\View\View
    {
        return view(static::$view, [
            'schedules' => $this->schedules,
        ]);
    }
}

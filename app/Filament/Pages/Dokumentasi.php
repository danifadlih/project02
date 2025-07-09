<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Schedule;

class Dokumentasi extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-check';
    protected static string $view = 'filament.pages.dokumentasi';
    protected static ?string $navigationLabel = 'Panduan Sistem';

    public $schedules;

    public function mount()
    {
        $this->schedules = Schedule::with(['course', 'lecturer', 'room'])->get();
    }
}

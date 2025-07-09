<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use App\Models\Lecturer;
use App\Models\Room;
use Filament\Widgets\Widget;

class StatistikFullWidget extends Widget
{
    protected static string $view = 'filament.widgets.statistik-full-widget';

    protected int|string|array $columnSpan = 'full';

    protected function getViewData(): array
    {
        return [
            'totalMataKuliah' => Course::count(),
            'totalDosen' => Lecturer::count(),
            'totalRuangan' => Room::count(),
        ];
    }
}

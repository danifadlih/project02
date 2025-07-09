<?php

namespace App\Filament\MahasiswaPanel\Resources\ScheduleResource\Pages;

use App\Filament\MahasiswaPanel\Resources\ScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSchedule extends CreateRecord
{
    protected static string $resource = ScheduleResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id(); // WAJIB untuk menyimpan user login
        return $data;
    }
}


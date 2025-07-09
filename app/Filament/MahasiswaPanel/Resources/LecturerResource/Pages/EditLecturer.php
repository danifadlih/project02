<?php

namespace App\Filament\MahasiswaPanel\Resources\LecturerResource\Pages;

use App\Filament\MahasiswaPanel\Resources\LecturerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLecturer extends EditRecord
{
    protected static string $resource = LecturerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

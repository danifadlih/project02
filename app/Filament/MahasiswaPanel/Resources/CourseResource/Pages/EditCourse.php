<?php

namespace App\Filament\MahasiswaPanel\Resources\CourseResource\Pages;

use App\Filament\MahasiswaPanel\Resources\CourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourse extends EditRecord
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

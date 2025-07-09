<?php

namespace App\Filament\MahasiswaPanel\Resources\RoomResource\Pages;

use App\Filament\MahasiswaPanel\Resources\RoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoom extends EditRecord
{
    protected static string $resource = RoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

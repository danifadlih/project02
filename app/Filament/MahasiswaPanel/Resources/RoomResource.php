<?php

namespace App\Filament\MahasiswaPanel\Resources;

use App\Filament\MahasiswaPanel\Resources\RoomResource\Pages;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Ruangan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->label('Nama Ruangan')->required(),
            Forms\Components\TextInput::make('location')->label('Lokasi')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Ruangan'),
            Tables\Columns\TextColumn::make('location')->label('Lokasi'),
        ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Aksi')
                    ->color('success'),
            ]);
        // BulkActions dihapus supaya gak ada opsi Delete massal
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            // Halaman create tidak didaftarkan supaya mahasiswa tidak bisa tambah data
        ];
    }
}

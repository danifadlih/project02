<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Models\Room;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Manajemen Ruangan';

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
                ->label('Lihat')
                ->icon('heroicon-o-eye')
                ->color('success'),

            Tables\Actions\EditAction::make()
                ->label('Edit')
                ->icon('heroicon-o-pencil'),

            Tables\Actions\DeleteAction::make()
                ->label('Hapus')
                ->icon('heroicon-o-trash')
                ->color('danger'),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make()
                ->label('Hapus Terpilih')
                ->icon('heroicon-o-trash')
                ->color('danger'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}

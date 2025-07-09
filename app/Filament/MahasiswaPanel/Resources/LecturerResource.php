<?php

namespace App\Filament\MahasiswaPanel\Resources;

use App\Filament\MahasiswaPanel\Resources\LecturerResource\Pages;
use App\Models\Lecturer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LecturerResource extends Resource
{
    protected static ?string $model = Lecturer::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Dosen';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->label('Nama')->required(),
            Forms\Components\TextInput::make('nidn')->label('NIDN')->required(),
            Forms\Components\TextInput::make('email')->label('Email')->email(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama'),
            Tables\Columns\TextColumn::make('nidn')->label('NIDN'),
            Tables\Columns\TextColumn::make('email')->label('Email'),
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
            'index' => Pages\ListLecturers::route('/'),
            // Halaman create & edit tidak didaftarkan
        ];
    }
}

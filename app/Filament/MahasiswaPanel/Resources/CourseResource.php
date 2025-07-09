<?php

namespace App\Filament\MahasiswaPanel\Resources;

use App\Filament\MahasiswaPanel\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Mata Kuliah';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->label('Nama Mata Kuliah')->required(),
            Forms\Components\TextInput::make('code')->label('Kode')->required(),
            Forms\Components\TextInput::make('sks')->label('SKS')->numeric()->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama'),
            Tables\Columns\TextColumn::make('code')->label('Kode'),
            Tables\Columns\TextColumn::make('sks')->label('SKS'),
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
            'index' => Pages\ListCourses::route('/'),
            // 'create' dan halaman lain tidak didaftarkan supaya mahasiswa hanya bisa lihat
        ];
    }
}

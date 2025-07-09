<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Manajemen Mata Kuliah';

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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}

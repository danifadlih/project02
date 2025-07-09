<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Daftar Jadwal Kuliah';
    protected static ?string $modelLabel = 'Jadwal Kuliah';
    protected static ?string $pluralModelLabel = 'Jadwal Kuliah';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('course_id')
                ->label('Mata Kuliah')
                ->relationship('course', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('lecturer_id')
                ->label('Dosen Pengampu')
                ->relationship('lecturer', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('room_id')
                ->label('Ruangan')
                ->relationship('room', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('day')
                ->label('Hari')
                ->options([
                    'Senin' => 'Senin',
                    'Selasa' => 'Selasa',
                    'Rabu' => 'Rabu',
                    'Kamis' => 'Kamis',
                    'Jumat' => 'Jumat',
                    'Sabtu' => 'Sabtu',
                ])
                ->required(),

            Forms\Components\TimePicker::make('start_time')->label('Jam Mulai')->required(),
            Forms\Components\TimePicker::make('end_time')->label('Jam Selesai')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('course.name')->label('Mata Kuliah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('lecturer.name')->label('Dosen')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('room.name')->label('Ruangan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('day')->label('Hari')->sortable(),
                Tables\Columns\TextColumn::make('start_time')->label('Jam Mulai'),
                Tables\Columns\TextColumn::make('end_time')->label('Jam Selesai'),
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }

    /**
     * Jika mahasiswa login, hanya tampilkan data miliknya.
     * Admin bisa lihat semua.
     */
    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->check() && auth()->user()->role === 'mahasiswa') {
            $query->where('user_id', auth()->id());
        }

        return $query;
    }

    /**
     * Saat membuat data, jika mahasiswa yang input, isi user_id otomatis.
     */
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        if (auth()->check() && auth()->user()->role === 'mahasiswa') {
            $data['user_id'] = auth()->id();
        }

        return $data;
    }

    /**
     * Saat update, pastikan user_id tidak diubah (jika mahasiswa).
     */
    public static function mutateFormDataBeforeSave(array $data): array
    {
        if (auth()->check() && auth()->user()->role === 'mahasiswa') {
            $data['user_id'] = auth()->id();
        }

        return $data;
    }
}

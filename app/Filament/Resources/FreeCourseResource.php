<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FreeCourseResource\Pages;
use App\Filament\Resources\FreeCourseResource\RelationManagers;
use App\Models\FreeCourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FreeCourseResource extends Resource
{
    protected static ?string $model = FreeCourse::class;

    protected static ?string $navigationGroup = 'Courses Managenent';

    protected static ?string $navigationIcon = 'heroicon-o-lock-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('video')
                    ->minSize(512)
                    ->maxSize(512000),
                Forms\Components\FileUpload::make('coverimg'),
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('description')->required(),
                Forms\Components\TextInput::make('price'),
                Forms\Components\TextInput::make('rating'),
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('coverimg'),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('rating'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFreeCourses::route('/'),
            'create' => Pages\CreateFreeCourse::route('/create'),
            'edit' => Pages\EditFreeCourse::route('/{record}/edit'),
        ];
    }
}

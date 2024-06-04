<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BasicCourseResource\Pages;
use App\Filament\Resources\BasicCourseResource\RelationManagers;
use App\Models\BasicCourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BasicCourseResource extends Resource
{
    protected static ?string $model = BasicCourse::class;

    protected static ?string $navigationGroup = 'Courses Managenent';
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

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
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBasicCourses::route('/'),
            'create' => Pages\CreateBasicCourse::route('/create'),
            'edit' => Pages\EditBasicCourse::route('/{record}/edit'),
        ];
    }
}

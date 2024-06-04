<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebcourseResource\Pages;
use App\Filament\Resources\WebcourseResource\RelationManagers;
use App\Models\Webcourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class WebcourseResource extends Resource
{
    protected static ?string $model = Webcourse::class;
    protected static ?string $navigationGroup = 'Courses Managenent';
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

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
            'index' => Pages\ListWebcourses::route('/'),
            'create' => Pages\CreateWebcourse::route('/create'),
            'edit' => Pages\EditWebcourse::route('/{record}/edit'),
        ];
    }
}

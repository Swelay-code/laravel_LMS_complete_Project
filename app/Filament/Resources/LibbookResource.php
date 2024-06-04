<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibbookResource\Pages;
use App\Filament\Resources\LibbookResource\RelationManagers;
use App\Models\Libbook;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LibbookResource extends Resource
{
    protected static ?string $model = Libbook::class;
    protected static ?string $navigationGroup = 'Library Managenent';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('bookupload')->required(),
                Forms\Components\TextInput::make('description')->required(),
                Forms\Components\FileUpload::make('coverimg')->required(),
                Forms\Components\TextInput::make('remarks'),
                Forms\Components\TextInput::make('rating'),
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('coverimg'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('remarks'),
                Tables\Columns\TextColumn::make('rating'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\ImageColumn::make('bookupload'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListLibbooks::route('/'),
            'create' => Pages\CreateLibbook::route('/create'),
            'edit' => Pages\EditLibbook::route('/{record}/edit'),
        ];
    }
}

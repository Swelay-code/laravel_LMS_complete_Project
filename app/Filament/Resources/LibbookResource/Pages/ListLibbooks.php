<?php

namespace App\Filament\Resources\LibbookResource\Pages;

use App\Filament\Resources\LibbookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLibbooks extends ListRecords
{
    protected static string $resource = LibbookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

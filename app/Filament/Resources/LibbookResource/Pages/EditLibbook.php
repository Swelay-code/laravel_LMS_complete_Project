<?php

namespace App\Filament\Resources\LibbookResource\Pages;

use App\Filament\Resources\LibbookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLibbook extends EditRecord
{
    protected static string $resource = LibbookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

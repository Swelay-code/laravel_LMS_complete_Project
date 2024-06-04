<?php

namespace App\Filament\Resources\FreeCourseResource\Pages;

use App\Filament\Resources\FreeCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreeCourse extends EditRecord
{
    protected static string $resource = FreeCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

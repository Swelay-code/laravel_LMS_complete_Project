<?php

namespace App\Filament\Resources\BasicCourseResource\Pages;

use App\Filament\Resources\BasicCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBasicCourse extends EditRecord
{
    protected static string $resource = BasicCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

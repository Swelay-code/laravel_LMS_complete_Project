<?php

namespace App\Filament\Resources\WebcourseResource\Pages;

use App\Filament\Resources\WebcourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebcourses extends ListRecords
{
    protected static string $resource = WebcourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

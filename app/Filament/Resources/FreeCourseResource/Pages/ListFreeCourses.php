<?php

namespace App\Filament\Resources\FreeCourseResource\Pages;

use App\Filament\Resources\FreeCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFreeCourses extends ListRecords
{
    protected static string $resource = FreeCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

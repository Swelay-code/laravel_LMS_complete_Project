<?php

namespace App\Filament\Resources\BasicCourseResource\Pages;

use App\Filament\Resources\BasicCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBasicCourses extends ListRecords
{
    protected static string $resource = BasicCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

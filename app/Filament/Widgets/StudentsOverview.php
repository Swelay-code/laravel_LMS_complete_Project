<?php

namespace App\Filament\Widgets;

use App\Models\Libbook;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Students;
use App\Models\User;

class StudentsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Students', Students::query()->count())
            ->descriptionIcon('heroicon-m-academic-cap')
            ->description('Total Students')
            ->color('success'),
        Stat::make('Admin', User::query()->count())
            ->description('All Users')
            ->descriptionIcon('heroicon-m-users')
            ->color('success'),
        Stat::make('Library Contant', Libbook::query()->count())
            ->description('Total E-book in library')
            ->descriptionIcon('heroicon-m-book-open')
            ->color('success'),
        ];
    }
}

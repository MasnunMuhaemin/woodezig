<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product;
use App\Models\Article;

class OverviewStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Artikel', Article::count())
                ->description('Total artikel yang terdaftar')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

            Stat::make('Total Produk', Product::count())
                ->description('Total produk yang terdaftar')
                ->descriptionIcon('heroicon-o-archive-box')
                ->color('primary'),
        ];
    }
}

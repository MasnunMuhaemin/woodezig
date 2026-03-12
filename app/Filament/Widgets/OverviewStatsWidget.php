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
        $catalog = Product::where('subcategory_id', 1)->count();
        $karya = Product::where('subcategory_id', 2)->count();  
        return [
            Stat::make('Total Artikel', Article::count())
                ->description('Total artikel yang terdaftar')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),
            Stat::make('Catalog Produk', $catalog)
                ->description('Total produk catalog')
                ->descriptionIcon('heroicon-o-archive-box')
                ->color('primary'),
            Stat::make('Karya', $karya)
                ->description('Total karya')
                ->descriptionIcon('heroicon-o-photo')
                ->color('success'),
        ];
    }
}

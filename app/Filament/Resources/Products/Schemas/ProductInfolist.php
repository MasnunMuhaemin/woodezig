<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TagsEntry;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nama'),
                TextEntry::make('slug'),
                TextEntry::make('subCategory.category.name')
                    ->label('Category'),
                TextEntry::make('subCategory.name')
                    ->label('Sub Category'),
                IconEntry::make('is_featured')
                    ->label('Produk Unggulan')
                    ->boolean(),
                TextEntry::make('tags')
                    ->label('Tags')
                    ->badge()
                    ->separator(',')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y H:i'),
                TextEntry::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->placeholder('-'),
                RepeatableEntry::make('images')
                    ->label('Gallery')
                    ->schema([
                        ImageEntry::make('image_path')
                            ->label('')
                            ->disk('public')
                            ->height(200),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
            ]);
    }
}

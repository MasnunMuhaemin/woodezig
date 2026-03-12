<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Schemas\Schema;

class ArticleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label('Judul'),
                TextEntry::make('slug'),
                TextEntry::make('content')
                    ->label('Isi Artikel')
                    ->columnSpanFull(),
                RepeatableEntry::make('images')
                    ->label('Gallery Gambar')
                    ->schema([
                        ImageEntry::make('image')
                            ->label('')
                            ->disk('public')
                            ->height(200),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Article Image')
                            ->disk('public')
                            ->directory('articles')
                            ->image()
                            ->imageEditor(),
                        Textarea::make('description')
                            ->label('Penjelasan Gambar')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(1)
                    ->addActionLabel('Add Image')
                    ->reorderable()
                    ->label('Gallery Gambar'),
            ]);
    }
}

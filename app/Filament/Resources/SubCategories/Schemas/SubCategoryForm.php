<?php

namespace App\Filament\Resources\SubCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class SubCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label('Kategori Induk')
                    ->helperText('Pilih kategori utama untuk sub-kategori ini.')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('name')
                    ->label('Nama Sub-Kategori')
                    ->helperText('Contoh: Chairs, Tables, Decoration, dsb.')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if (!$get('slug')) {
                            $set('slug', Str::slug($state));
                        }
                    })
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('URL Slug')
                    ->helperText('Slug otomatis dibuat dari nama untuk keperluan URL.')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
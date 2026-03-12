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
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('name')
                    ->label('Nama Sub Category')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if (!$get('slug')) {
                            $set('slug', Str::slug($state));
                        }
                    })
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('Slug')
                    ->helperText('Slug bisa otomatis dari nama atau diubah manual.')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
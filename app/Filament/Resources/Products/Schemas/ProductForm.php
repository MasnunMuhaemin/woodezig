<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Select::make('category_filter')
                    ->label('Category')
                    ->options(Category::pluck('name', 'id'))
                    ->default(fn ($record) => $record?->subCategory?->category_id)
                    ->live()
                    ->afterStateUpdated(fn ($set) => $set('subcategory_id', null)),
                Select::make('subcategory_id')
                    ->label('Sub Category')
                    ->options(function ($get, $record) {
                        $categoryId = $get('category_filter')
                            ?? $record?->subCategory?->category_id;

                        return SubCategory::where('category_id', $categoryId)
                            ->pluck('name', 'id');
                    })
                    ->searchable()
                    ->required(),
                Textarea::make('description')
                    ->rows(4)
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Produk/Karya')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),
                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Select::make('category_filter')
                    ->label('Pilih Kategori')
                    ->options(Category::pluck('name', 'id'))
                    ->default(fn ($record) => $record?->subCategory?->category_id)
                    ->live()
                    ->afterStateUpdated(fn ($set) => $set('subcategory_id', null)),
                Select::make('subcategory_id')
                    ->label('Sub Kategori')
                    ->options(function ($get, $record) {
                        $categoryId = $get('category_filter')
                            ?? $record?->subCategory?->category_id;

                        return SubCategory::where('category_id', $categoryId)
                            ->pluck('name', 'id');
                    })
                    ->searchable()
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi Detail')
                    ->rows(4)
                    ->required(),
                TagsInput::make('tags')
                    ->label('Tags Produk')
                    ->placeholder('Tambahkan tag lalu tekan enter')
                    ->helperText('Contoh: kayu jati, furniture, handmade')
                    ->separator(','),
                Toggle::make('is_featured')
                    ->label('Produk Unggulan')
                    ->helperText('Produk ini akan muncul di bagian Featured Products pada halaman utama.')
                    ->default(false),
                Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image_path')
                            ->label('Unggah Foto Produk')
                            ->disk('public')
                            ->directory('products')
                            ->image()
                            ->imageEditor()
                            ->required(),
                    ])
                    ->columns(1)
                    ->addActionLabel('Tambah Foto Produk')
                    ->reorderable()
                    ->label('Galeri Foto Produk')
            ]);
    }
}
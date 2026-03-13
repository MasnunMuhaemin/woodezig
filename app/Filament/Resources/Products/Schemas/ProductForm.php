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

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Produk/Karya')
                    ->helperText('Masukkan nama produk atau karya yang akan ditampilkan.')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),
                TextInput::make('slug')
                    ->label('URL Slug')
                    ->helperText('Otomatis dari nama, dipisahkan tanda "-" (misal: kursi-kayu).')
                    ->required()
                    ->unique(ignoreRecord: true),
                Select::make('category_filter')
                    ->label('Pilih Kategori')
                    ->helperText('Filter sub-kategori berdasarkan kategori induknya.')
                    ->options(Category::pluck('name', 'id'))
                    ->default(fn ($record) => $record?->subCategory?->category_id)
                    ->live()
                    ->afterStateUpdated(fn ($set) => $set('subcategory_id', null)),
                Select::make('subcategory_id')
                    ->label('Sub Kategori')
                    ->helperText('Pilih sub-kategori spesifik untuk produk ini.')
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
                    ->helperText('Jelaskan keunggulan, material, dan spesifikasi produk.')
                    ->rows(4)
                    ->required(),
                Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image_path')
                            ->label('Unggah Foto Produk')
                            ->helperText('Gunakan foto kualitas tinggi untuk tampilan terbaik.')
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

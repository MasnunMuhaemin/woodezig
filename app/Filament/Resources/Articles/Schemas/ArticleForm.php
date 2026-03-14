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
                    ->label('Judul Artikel')
                    ->helperText('Masukkan judul artikel yang menarik dan relevan.')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->label('URL Slug')
                    ->helperText('Slug otomatis dibuat dari judul, pastikan unik untuk URL artikel.')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('content')
                    ->label('Konten Artikel')
                    ->helperText('Gunakan area ini untuk menulis narasi artikel secara lengkap.')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Unggah Foto')
                            ->helperText('Format: JPG/PNG. Foto pertama akan menjadi Hero Image.')
                            ->disk('public')
                            ->directory('articles')
                            ->image()
                            ->imageEditor(),
                        Textarea::make('description')
                            ->label('Penjelasan Gambar')
                            ->helperText('Berikan narasi tambahan untuk foto ini (format satu foto satu penjelasan).')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(1)
                    ->addActionLabel('Tambah Foto & Penjelasan')
                    ->reorderable()
                    ->label('Galeri & Cerita Foto'),
            ]);
    }
}

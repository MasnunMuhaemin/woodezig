<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('subCategory.name')
                    ->label('Sub Category')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('subCategory.category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->width(200)
                    ->height(200),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

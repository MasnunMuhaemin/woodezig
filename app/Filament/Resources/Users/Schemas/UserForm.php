<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->helperText('Masukkan nama pengguna admin.')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Alamat Email')
                    ->helperText('Email digunakan untuk login ke panel admin.')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->label('Kata Sandi')
                    ->helperText('Minimal 8 karakter. Biarkan kosong jika tidak ingin mengubah (pada mode edit).')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) =>
                        filled($state) ? Hash::make($state) : null
                    )
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $operation) => $operation === 'create')
                    ->visible(fn (string $operation) => $operation === 'create'),
            ]);
    }
}

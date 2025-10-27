<?php

namespace App\Filament\Resources\Shops\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ShopForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('shop_name')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('shop_logo')
                    ->required()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('shop_logos')
                    ->disk('public')
                    ->columnSpanFull(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('rating')
                    ->required()
                    ->numeric(),
                Textarea::make('shop_url')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}

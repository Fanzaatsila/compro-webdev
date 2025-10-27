<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('product_name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->required()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('products')
                    ->disk('public')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Select::make('category')
                    ->options([
                        'kacang-mete' => 'Kacang Mete',
                        'kacang-almond' => 'Kacang Almond',
                    ]),
                \Filament\Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'individual' => 'Individual',
                        'hampers' => 'Hampers',
                    ]),
                \Filament\Forms\Components\Toggle::make('is_featured')
                    ->label('Featured Product')
                    ->helperText('Display this product in featured sections')
                    ->default(false),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('banner_key')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('banner_file')
                    ->required()
                    ->acceptedFileTypes(['image/*', 'video/*'])
                    ->directory('banners')
                    ->disk('public')
                    ->maxSize(15000) // 15MB limit in KB
                    ->columnSpanFull(),
            ]);
    }
}

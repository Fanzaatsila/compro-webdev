<?php

namespace App\Filament\Resources\Ads\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AdForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\FileUpload::make('poster')
                    ->required()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('ads')
                    ->disk('public')
                    ->maxSize(15000) // 15MB limit in KB
                    ->columnSpanFull(),
            ]);
    }
}

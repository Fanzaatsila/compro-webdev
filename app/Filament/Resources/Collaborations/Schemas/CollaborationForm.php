<?php

namespace App\Filament\Resources\Collaborations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CollaborationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('benefits')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->required()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('collaborations')
                    ->disk('public')
                    ->maxSize(15000)
                    ->columnSpanFull(),
            ]);
    }
}

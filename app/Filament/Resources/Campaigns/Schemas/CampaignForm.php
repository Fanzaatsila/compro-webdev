<?php

namespace App\Filament\Resources\Campaigns\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CampaignForm
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
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('placeholder')
                    ->required()
                    ->acceptedFileTypes(['image/*'])
                    ->directory('campaigns')
                    ->disk('public')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'promo' => 'Promo',
                        'event' => 'Event',
                    ]),
                \Filament\Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'upcoming' => 'Upcoming',
                    ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Carriers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CarrierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('job_title')
                    ->required(),
                TextInput::make('division')
                    ->required(),
                TextInput::make('city')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                Textarea::make('qualification')
                    ->required(),
                Textarea::make('benefits')
                    ->required(),
                \Filament\Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'part-time' => 'Part Time',
                        'full-time' => 'Full Time',
                        'internship' => 'Internship',
                        'freelance' => 'Freelance',
                    ]),
                TextInput::make('range_salary')
                    ->prefix('Rp')
                    ->placeholder('6-8 Juta')
                    ->postfix('/bulan')
                    ->required(),
            ]);
    }
}

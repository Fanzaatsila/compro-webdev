<?php

namespace App\Filament\Resources\Carriers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CarriersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('job_title')
                    ->searchable(),
                TextColumn::make('division')
                    ->searchable(),
                TextColumn::make('city')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('qualification')
                    ->searchable(),
                TextColumn::make('benefits')
                    ->searchable(),
                TextColumn::make('range_salary')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

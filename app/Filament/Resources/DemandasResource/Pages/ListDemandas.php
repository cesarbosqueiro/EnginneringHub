<?php

namespace App\Filament\Resources\DemandasResource\Pages;

use App\Filament\Resources\DemandasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemandas extends ListRecords
{
    protected static string $resource = DemandasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

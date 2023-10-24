<?php

namespace App\Filament\Resources\DemandasResource\Pages;

use App\Filament\Resources\DemandasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDemandas extends ViewRecord
{
    protected static string $resource = DemandasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

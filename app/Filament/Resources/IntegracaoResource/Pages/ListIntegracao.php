<?php

namespace App\Filament\Resources\IntegracaoResource\Pages;

use App\Filament\Resources\IntegracaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIntegracao extends ListRecords
{
    protected static string $resource = IntegracaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

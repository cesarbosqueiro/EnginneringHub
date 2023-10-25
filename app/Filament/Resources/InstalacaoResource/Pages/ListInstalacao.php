<?php

namespace App\Filament\Resources\InstalacaoResource\Pages;

use App\Filament\Resources\InstalacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstalacao extends ListRecords
{
    protected static string $resource = InstalacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

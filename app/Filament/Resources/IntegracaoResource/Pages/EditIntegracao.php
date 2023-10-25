<?php

namespace App\Filament\Resources\IntegracaoResource\Pages;

use App\Filament\Resources\IntegracaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntegracao extends EditRecord
{
    protected static string $resource = IntegracaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

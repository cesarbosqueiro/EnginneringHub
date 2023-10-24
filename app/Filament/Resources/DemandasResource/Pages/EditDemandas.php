<?php

namespace App\Filament\Resources\DemandasResource\Pages;

use App\Filament\Resources\DemandasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemandas extends EditRecord
{
    protected static string $resource = DemandasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

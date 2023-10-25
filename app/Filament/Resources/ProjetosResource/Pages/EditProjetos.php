<?php

namespace App\Filament\Resources\ProjetosResource\Pages;

use App\Filament\Resources\ProjetosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjetos extends EditRecord
{
    protected static string $resource = ProjetosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

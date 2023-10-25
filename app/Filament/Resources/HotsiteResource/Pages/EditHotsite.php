<?php

namespace App\Filament\Resources\HotsiteResource\Pages;

use App\Filament\Resources\HotsiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHotsite extends EditRecord
{
    protected static string $resource = HotsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

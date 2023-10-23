<?php

namespace App\Filament\Resources\CustomLicenseResource\Pages;

use App\Filament\Resources\CustomLicenseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomLicense extends EditRecord
{
    protected static string $resource = CustomLicenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

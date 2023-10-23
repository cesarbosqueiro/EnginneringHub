<?php

namespace App\Filament\Resources\CustomLicenseResource\Pages;

use App\Filament\Resources\CustomLicenseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomLicenses extends ListRecords
{
    protected static string $resource = CustomLicenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

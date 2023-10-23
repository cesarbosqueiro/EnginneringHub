<?php

namespace App\Filament\Resources\CustomLicenseResource\Pages;

use App\Filament\Resources\CustomLicenseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomLicense extends CreateRecord
{
    protected static string $resource = CustomLicenseResource::class;
}

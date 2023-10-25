<?php

namespace App\Filament\Resources\HotsiteResource\Pages;

use App\Filament\Resources\HotsiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHotsites extends ListRecords
{
    protected static string $resource = HotsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\UserEventResource\Pages;

use App\Filament\Resources\UserEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserEvents extends ListRecords
{
    protected static string $resource = UserEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("Daftar Event Baru"),
        ];
    }
}

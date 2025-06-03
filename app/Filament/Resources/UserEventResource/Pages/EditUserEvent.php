<?php

namespace App\Filament\Resources\UserEventResource\Pages;

use App\Filament\Resources\UserEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserEvent extends EditRecord
{
    protected static string $resource = UserEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

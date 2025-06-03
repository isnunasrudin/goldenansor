<?php

namespace App\Filament\Resources\UserEventResource\Pages;

use App\Filament\Resources\UserEventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserEvent extends CreateRecord
{
    protected static string $resource = UserEventResource::class;

    

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}

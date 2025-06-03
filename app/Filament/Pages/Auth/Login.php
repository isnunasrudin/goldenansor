<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Login as Page;
use Illuminate\Validation\ValidationException;
use Propaganistas\LaravelPhone\PhoneNumber;

class Login extends Page
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getWhatsappFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.whatsapp' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }

    protected function getWhatsappFormComponent(): Component
    {
        return TextInput::make('whatsapp')
            ->label('No. WhatsApp')
            ->required()
            ->rules([
                'phone:ID'
            ]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'whatsapp' => new PhoneNumber($data['whatsapp'], 'ID'),
            'password' => $data['password'],
        ];
    }
}

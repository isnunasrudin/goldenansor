<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Pages\Auth\Register as BaseRegister;
use Propaganistas\LaravelPhone\PhoneNumber;

class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getWhatsappFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),

                        Textarea::make('address')
                            ->label('Alamat')
                            ->required(),
                    
                        ToggleButtons::make('ukuran_baju')
                            ->label('Ukuran Kaos/Baju')
                            ->options([
                                'S' => 'S',
                                'M' => 'M',
                                'L' => 'L',
                                'XL' => 'XL',
                                '2XL' => '2XL',
                                '3XL' => '3XL',
                            ])
                            ->grouped()
                            ->required(),
        
                        FileUpload::make('ktp')
                            ->label('KTP')
                            ->required(),
                    ])
                    ->statePath('data'),
            ),
        ];
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

    protected function mutateFormDataBeforeRegister(array $data): array
    {
        $data['whatsapp'] = new PhoneNumber($data['whatsapp']);
        return $data;
    }
}

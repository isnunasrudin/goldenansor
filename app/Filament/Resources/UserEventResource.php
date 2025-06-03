<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserEventResource\Pages;
use App\Filament\Resources\UserEventResource\RelationManagers;
use App\Models\UserEvent;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserEventResource extends Resource
{
    protected static ?string $model = UserEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = "Event Saya";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('event_id')
                    ->label('Pilih Kegiatan')
                    ->relationship('event', 'name')
                    ->required(),

                Section::make('Kelengkapan')
                    ->schema([
                        FileUpload::make('surat_rekom')
                           ->label('Surat Rekomendasi (PR/PAC)') 
                            ->required(),
        
                        FileUpload::make('picture')
                            ->label('Foto Diri (3x4)')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio("3:4")
                            ->required(),
        
                        FileUpload::make('resi')
                            ->label('Bukti Pembayaran')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event.name'),
                TextColumn::make('created_at')->label('Ditambahkan pada'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserEvents::route('/'),
            'create' => Pages\CreateUserEvent::route('/create'),
            'edit' => Pages\EditUserEvent::route('/{record}/edit'),
            'presence' => Pages\PresenceUserEvent::route('/{record}/presence'),
        ];
    }
}

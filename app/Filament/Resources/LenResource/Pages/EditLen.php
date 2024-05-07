<?php

namespace App\Filament\Resources\LenResource\Pages;

use App\Filament\Resources\LenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLen extends EditRecord
{
    protected static string $resource = LenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

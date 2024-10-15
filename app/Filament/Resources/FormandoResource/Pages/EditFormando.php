<?php

namespace App\Filament\Resources\FormandoResource\Pages;

use App\Filament\Resources\FormandoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormando extends EditRecord
{
    protected static string $resource = FormandoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\FormandoResource\Pages;

use App\Filament\Resources\FormandoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormandos extends ListRecords
{
    protected static string $resource = FormandoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

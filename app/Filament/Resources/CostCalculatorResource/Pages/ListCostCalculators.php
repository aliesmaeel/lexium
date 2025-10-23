<?php

namespace App\Filament\Resources\CostCalculatorResource\Pages;

use App\Filament\Resources\CostCalculatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCostCalculators extends ListRecords
{
    protected static string $resource = CostCalculatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

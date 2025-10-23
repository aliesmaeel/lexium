<?php

namespace App\Filament\Resources\CostCalculatorResource\Pages;

use App\Filament\Resources\CostCalculatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCostCalculator extends EditRecord
{
    protected static string $resource = CostCalculatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CostCalculatorResource\Pages;
use App\Filament\Resources\CostCalculatorResource\RelationManagers;
use App\Models\CostCalculator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CostCalculatorResource extends Resource
{
    protected static ?string $model = CostCalculator::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('business_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_reason')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_owners')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('visas_required')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('office_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('start_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jurisdiction')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('living_in_uae')
                    ->required(),
                Forms\Components\Toggle::make('dependents_visas_needed')
                    ->required(),
                Forms\Components\TextInput::make('nationality')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_read')
                    ->label('Mark this calculation as read or unread')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->getStateUsing(function (CostCalculator $record): string {
                        return $record->first_name . ' ' . $record->last_name;
                    }),
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_type')
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('read')
                    ->query(fn (Builder $query): Builder => $query->where('is_read', true)),
                Tables\Filters\Filter::make('unread')
                    ->query(fn (Builder $query): Builder => $query->where('is_read', false)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()

                    ->modalHeading(fn($record) => 'Cost Calculation from ' . $record->first_name . ' ' . $record->last_name)
                    ->modalContent(function ($record) {
                        // ✅ Mark as read when opened
                        if (! $record->is_read) {
                            $record->update(['is_read' => true]);
                        }
                    }),
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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCostCalculators::route('/'),
            'create' => Pages\CreateCostCalculator::route('/create'),
            'edit' => Pages\EditCostCalculator::route('/{record}/edit'),
        ];
    }
}

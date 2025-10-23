<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionsResource\Pages;
use App\Filament\Resources\SubscriptionsResource\RelationManagers;
use App\Models\Subscriptions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubscriptionsResource extends Resource
{
    protected static ?string $model = Subscriptions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_read')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('read')
                    ->query(fn (Builder $query): Builder => $query->where('is_read', true)),
                Tables\Filters\Filter::make('unread')
                    ->query(fn (Builder $query): Builder => $query->where('is_read', false)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->form([])
                    ->modalHeading(fn($record) => 'Message from ' . $record->name)
                    ->modalContent(function ($record) {
                        // ✅ Mark as read when opened
                        if (! $record->is_read) {
                            $record->update(['is_read' => true]);
                        }

                        return view('filament.subscription-message-modal', ['record' => $record]);
                    })
                    ->modalSubmitAction(false), // removes default "Save" button
                Tables\Actions\Action::make('mark_unread')
                    ->label('Mark as Unread')
                    ->icon('heroicon-o-envelope')
                    ->requiresConfirmation()
                    ->visible(fn($record) => $record->is_read)
                    ->action(function ($record) {
                        $record->update(['is_read' => false]);
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
            'index' => Pages\ListSubscriptions::route('/'),
            'create' => Pages\CreateSubscriptions::route('/create'),
            'edit' => Pages\EditSubscriptions::route('/{record}/edit'),
        ];
    }
}

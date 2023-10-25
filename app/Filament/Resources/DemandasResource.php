<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemandasResource\Pages;
use App\Filament\Resources\DemandasResource\RelationManagers;
use App\Models\Demandas;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemandasResource extends Resource
{
    protected static ?string $model = Demandas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->form([
                        TextInput::make('name')
                            ->label('Nome completo')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('email')
                            ->label('E-mail'),

                        TextInput::make('created_at')
                            ->label('Data criação'),
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
            'index' => Pages\ListDemandas::route('/'),
            'create' => Pages\CreateDemandas::route('/create'),
            'view' => Pages\ViewDemandas::route('/{record}'),
            'edit' => Pages\EditDemandas::route('/{record}/edit'),
        ];
    }
}

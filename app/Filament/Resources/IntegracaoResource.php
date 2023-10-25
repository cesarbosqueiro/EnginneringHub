<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntegracaoResource\Pages;
use App\Filament\Resources\IntegracaoResource\RelationManagers;
use App\Models\Integracao;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IntegracaoResource extends Resource
{
    protected static ?string $model = Integracao::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    protected static ?string $navigationGroup = 'Interno';
    protected static ?string $navigationLabel = 'Integração';
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
            'index' => Pages\ListIntegracao::route('/'),
            'create' => Pages\CreateIntegracao::route('/create'),
            'edit' => Pages\EditIntegracao::route('/{record}/edit'),
        ];
    }
}

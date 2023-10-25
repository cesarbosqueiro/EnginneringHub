<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotsiteResource\Pages;
use App\Filament\Resources\HotsiteResource\RelationManagers;
use App\Models\Hotsite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HotsiteResource extends Resource
{
    protected static ?string $model = Hotsite::class;

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
            'index' => Pages\ListHotsites::route('/'),
            'create' => Pages\CreateHotsite::route('/create'),
            'edit' => Pages\EditHotsite::route('/{record}/edit'),
        ];
    }    
}

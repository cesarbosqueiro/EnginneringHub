<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()
                ->label('Nome completo'),

                TextInput::make('email')->email()
                ->label('E-mail'),

                TextInput::make('password')->password()
                ->label('Senha'),

            Select::make('roles')
            ->multiple()
            ->relationship('roles', 'name')
            ->preload()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->label('ID'),

                TextColumn::make('name')
                ->label('Nome completo'),

                TextColumn::make('email')
                ->label('E-mail'),

                TextColumn::make('role')
                ->label('Grupo'),

                TextColumn::make('created_at')
                ->dateTime('d/m/Y H:i:s')
                ->label('Data criação'),

                TextColumn::make('updated_at')
                ->dateTime('d/m/Y H:i:s')
                ->label('Data Edição'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Editar'),
                Tables\Actions\DeleteAction::make()
                ->label('Excluir'), 
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->label('Excluir usuário'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}

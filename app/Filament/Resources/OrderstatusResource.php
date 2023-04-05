<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderstatusResource\Pages;
use App\Filament\Resources\OrderstatusResource\RelationManagers;
use App\Models\Orderstatus;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class OrderstatusResource extends Resource
{
    protected static ?string $model = Orderstatus::class;

    protected static ?string $pluralModelLabel = 'Orderstatus';

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('orderstatus')
                ->required()
                ->maxLength(255),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('orderstatus'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOrderstatuses::route('/'),
            'create' => Pages\CreateOrderstatus::route('/create'),
            'edit' => Pages\EditOrderstatus::route('/{record}/edit'),
        ];
    }
}

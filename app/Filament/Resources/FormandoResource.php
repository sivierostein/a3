<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormandoResource\Pages;
use App\Filament\Resources\FormandoResource\RelationManagers;
use App\Models\Formando;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormandoResource extends Resource
{
    protected static ?string $model = Formando::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->label('Nome de Diplomado')
                    ->required(),
                Forms\Components\TextInput::make('ano')
                    ->label('Ano de Formatura')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('semestre')
                    ->label('Semestre de Formatura')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('data_colacao')
                    ->label('Data de Colação')
                    ->required(),
                Forms\Components\Select::make('curso_id')
                    ->required()
                    ->relationship('curso', 'nome')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ano')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('semestre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('data_colacao')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('curso_id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListFormandos::route('/'),
            'create' => Pages\CreateFormando::route('/create'),
            'edit' => Pages\EditFormando::route('/{record}/edit'),
        ];
    }
}

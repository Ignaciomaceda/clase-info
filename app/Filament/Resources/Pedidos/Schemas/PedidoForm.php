<?php

namespace App\Filament\Resources\Pedidos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;


class PedidoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('cliente_id')
                    ->relationship(name: 'cliente', titleAttribute: 'nombre_completo')
                    ->required(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
                TextInput::make('fecha')
                    ->required(),

                //en la siguiente linea es Select en lugar de TextINput
                Select::make('estatus')
                    ->options([
                        'Pendiente' => 'Pendiente',
                        'Cancelado' => 'Cancelado',
                        'Entregado' => 'Entregado',
                    ])
                    ->required(),
            ]);
    }
}

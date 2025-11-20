<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id','total','fecha','estatus'];

    //Un pedido pertenece a un Cliente
    public function cliente()
    {
        return$this->belongsTo(Cliente::class);
    }
    //Un pedido tiene muchos PedidoDetalle
    public function pedidodetalles()
    {
        return$this->hasMany(PedidoDetalle::class);
    }


}

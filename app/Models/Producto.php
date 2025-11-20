<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected$fillable =['nombre','precio','foto','estatus'];

    //Un Producto aparece en muchos PedidoDetalle
    public function pedidodetalle()
    {
        return $this->hasMany(PedidoDetalle::class);
    }

}

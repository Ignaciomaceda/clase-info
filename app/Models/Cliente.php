<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected$fillable =['nombre_completo','telefono','correo'];

    //Un cliente tiene muchos pedidos
    public function pedidos ()
    {
        return $this->hasMany(Pedido::class);
    }
    
}

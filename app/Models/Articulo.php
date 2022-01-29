<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_articulo',
        'precio',
        'pais_origen',
        'observaciones',
        'seccion',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];

    public function articulosClientes() {
        return $this->belongsTo(Cliente::class);
    }

    public function articulosProveedor() {
        return $this->hasOne(Proveedor::class);
    }
}

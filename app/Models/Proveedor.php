<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_proveedor',
        'productos',
        'cantidad_productos',
        'precio_total',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];

    public function proveedorArticulo(): BelongsTo {
        return $this->belongsTo(Articulo::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'remember_token'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];

    public function clientesArticulos() {
        return $this->hasMany(Articulo::class);
    }

}

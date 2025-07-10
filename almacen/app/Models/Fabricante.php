<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = 'fabricantes';
    protected $primaryKey = 'codigo';
    public $incrementing = true;
    public $timestamps = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nombre',

    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}

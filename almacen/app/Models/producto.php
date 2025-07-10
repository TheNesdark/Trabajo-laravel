<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'codigo';
    public $incrementing = true;
    public $timestamps = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nombre',
        'precio',
        'codigo_fabricante',
    ];

    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class, 'codigo_fabricante', 'codigo');
    }
}

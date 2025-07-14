<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'codigo';
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'codigo_fabricante',
    ];
    
    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class, 'codigo_fabricante', 'codigo');
    }

}

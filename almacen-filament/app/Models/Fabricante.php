<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = 'fabricantes';
    protected $primaryKey = 'codigo';
    public $timestamps = true;
    protected $fillable = ['nombre'];


    public function productos()
    {
        return $this->hasMany(Producto::class, 'codigp_fabricante');
    }

}

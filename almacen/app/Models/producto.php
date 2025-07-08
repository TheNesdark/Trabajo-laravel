<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'codigo';
    protected $foreignKey = 'codigo_fabricante';
    public $timestamps = false;
    protected $fillable = ['nombre', 'precio', 'codigo_fabricante'];

    use HasFactory;
}

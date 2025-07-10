<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario';
    protected $fillable = ['usuario','nombre','password',];
    public $incrementing = false;
    public $timestamps = true;
    protected $keyType = 'string';
    protected $hidden = ['password'];
}

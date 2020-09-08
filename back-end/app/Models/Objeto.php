<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objeto extends Model
{
    use SoftDeletes;
    
    protected $table = 'objetos';
    protected $fillable = [
        'nome', 'modelo3d', 'descricao'
    ];
}
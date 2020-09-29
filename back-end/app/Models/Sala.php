<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sala extends Model
{
    use SoftDeletes;
    
    protected $table = 'salas';
    protected $fillable = [
        'nome', 'descricao', 'filehash', 'size', 'extension','path'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto2s'; // ainda aponta para a tabela correta

    protected $fillable = ['nome', 'imagem', 'categoria'];
}

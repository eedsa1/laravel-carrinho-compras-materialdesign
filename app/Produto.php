<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //campos obrigatórios
	protected $fillable = [
    	'nome',
    	'descricao',
    	'imagem',
    	'valor',
    	'ativo'
    ];

}

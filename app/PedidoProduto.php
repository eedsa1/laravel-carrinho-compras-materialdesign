<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
	protected $fillable = [
		'pedido_id',
		'produto_id',
		'status',
		'valor'
	];

    public function produto(){

    	//belongsTo pesquisa pela foreign key produto_id na tabela de produto
    	return $this->belongsTo('App\Produto', 'produto_id', 'id');

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

	protected $fillable = [
		'user_id',
		'status'
	];

    public function pedido_produtos(){

    	return $this->hasMany('App\PedidoProduto')
    		->select(\DB::raw('produto_id, sum(desconto) as descontos, sum(valor) as valores, count(1) as qtd'))//esse count é para ver a quantidade de produtos
    		->groupBy('produto_id')
    		->orderBy('produto_id', 'desc');
    		
    }

    public function pedido_produtos_itens(){

        return $this->hasMany('App\PedidoProduto');

    }

    //recebe um array no método adicionar do CarrinhoController
    public static function consultaId($where){

    	//irá retornar apenas a "id" para pedido
    	$pedido = self::where($where)->first(['id']);
    	return !empty($pedido->id) ? $pedido->id : null;

    }
}

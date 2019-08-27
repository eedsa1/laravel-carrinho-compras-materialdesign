<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //retorna os produtos ativos na index
    public function index()
    {
        $registros = Produto::where([
            'ativo' => 'S'
        ])->get();

        return view('home.index', compact('registros'));
    }

    //métdo de busca por produto (detalhamento)
    public function produto($id = null){
        
        if( !empty($id) ){
            $registro = Produto::where([
                'id' => $id,
                'ativo' => 'S'
            ])->first();

            if( !empty($registro) ){
                return view('home.produto', compact('registro'));
            }
        }

        return redirect()->route('index');

    }
}

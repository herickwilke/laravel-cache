<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Cache;

class ProdutosControlador extends Controller
{
    function index() {
        $expiracao = 1; //minutos

        $produtos = Cache::remember('todososprodutos', $expiracao, function(){
            info('Passei por aqui');
            return Produto::with('categorias')->get();
        });

        return view('produtos', compact(['produtos']));
    }
}

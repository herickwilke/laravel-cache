<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosControlador extends Controller
{
    function index() {
        $produtos = Produto::with('categorias')->get();
        return view('produtos', compact(['produtos']));
    }
}

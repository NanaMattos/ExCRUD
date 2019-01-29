<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function create (Request $request){
	    $livros = new Livro;
	    $livros->titulo = $request->titulo;
	    $livros->autor = $request->autor;
	    $livros->editora = $request->editora;
	    $livros->versao = $request->versao;
	    $livros->anoDeLancamento = $request->anoDeLancamento;
	    $livros->qtdEstoque = $request->qtdEstoque;
	    $livros->qtdEmprestado = $request->qtdEmprestado;
	    $livros->save();
	    return response()->json([$livros]);
	}
}

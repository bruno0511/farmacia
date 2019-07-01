<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaBasicaController extends Controller
{

    public function sobre()
    {
        $dado = "blog@bog.com";
        $telefone = '38 99073023';

        // chamando o view e passando um dado
        // with('nome da variavel', valor)
        return view('sobre')->with('email',$dado)
        ->with('telefone',$telefone);
        // outra forma de passar o dado
        //return view('sobre')->withEmail($dado);

    }
    public function contato()
    {
        return view('contato');
    }
}

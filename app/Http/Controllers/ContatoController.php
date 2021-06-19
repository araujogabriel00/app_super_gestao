<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        var_dump($_POST);
        return view('site.contato');//PASSAR VIEW QUE SERÁ CHAMADA ATRAVES DA ROTA QUE ESTA CHAMANDO O CONTROLER
    }
}

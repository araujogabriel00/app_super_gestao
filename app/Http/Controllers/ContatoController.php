<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        /* dd($request->all());//TODOS OS PARAMETROS PASSADOS ATRAVES DO GET
        echo $request->input('nome');////PARAMETROS ESPECIFICOS PASSADOS ATRAVES DO GET
        return view('site.contato');//PASSAR VIEW QUE SERÁ CHAMADA ATRAVES DA ROTA QUE ESTA CHAMANDO O CONTROLER */

        /* $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->mensagem = $request->input('mensagem');
        $contato->motivo_contato = $request->input('motivo_contato');


      
        /* $contato->save(); */

        /*  $contato = new SiteContato();
        $contato->fill($request->all());
        /* print_r($contato->getAttributes()); */
        /*  $contato->save();
        */

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|min:3|max:40|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ],

            [
                'required' => 'O campo :attribute nome está vazio'


            ]



        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}

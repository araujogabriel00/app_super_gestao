<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $contato = new SiteContato();
        $contato->nome = 'Gabriel';
        $contato->telefone = '(61) 993783203';
        $contato->mensagem = 'dsfasdfsdfsdfsdfsdffgsdfgsdfgsdfgsdfg';
        $contato->motivo_contato= 1;
        $contato->email = 'contato@contato1100.com.br';
        $contato->save(); */

        factory(SiteContato::class,100)->create();


    }
}

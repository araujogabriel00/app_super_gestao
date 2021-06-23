<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 1100';
        $fornecedor->site = 'fornecedor1100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor1100.com.br';
        $fornecedor->save();

        //método create(atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 1200',
            'site' => 'fornecedor1200.com.br',
            'uf' => 'DF',
            'email' => 'contato@fornecedor1200.com.br'
        ]);
        
        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 1300',
            'site' => 'fornecedor1300.com.br',
            'uf' => 'GO',
            'email' => 'contato@fornecedor1300.com.br'
        ]);
    }
}

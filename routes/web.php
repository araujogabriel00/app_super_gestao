<?php

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


///ARQUIVO //@ //FUNÇAO                            ///APELIDOS PARA CHAMADA DA ROTA DENTRO DA APLICAÇÃO
Route::middleware(LogAcessoMiddleware::class)
    ->get('/', 'PrincipalController@principal')
    ->name('site.index');
    

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/sobrenos', 'SobreNosController@SobreNos')->name('site.sobre-nos');

//AGRUPANDO ROTAS
Route::prefix('/app')->group(function () {

    Route::get('/login', function () {
        return 'Login';
    })->name('app.login');

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get(
        '/fornecedores',
        'FornecedorController@index'
    )->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});


///Encaminhando parâmetros da rota para o controlador

Route::get('/teste/{p1}/{p2}', 'TesteController@Teste')->name('teste');


//FALLBACK

Route::fallback(function () {
    echo 'Esta rota não existe.<a href="' . route('site.index') . '">Clique aqui</a>';
});

//REDIRECIONAMENTO DE ROTAS
Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
});

Route::get('/rota1', function () {
    echo 'rota1';
})->name('site.rota1');


/* Route::redirect('/rota2','/rota1'); */

//PARAMETRO ///SE O PARAMETRO NÃO FOR OBRIGATÓRIO USAR O ?
/* Route::get(
    '/contatos/{nome}/{categoria_id}/',
    function (
        string $nome,
        int $categoria_id = 1 // 1-INFORMAÇÃO
    ) {
        echo  $nome . " " . $categoria_id;
    }
)->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+'); */
    


//POSSÍVEIS ROTAS///
//Route::get
//Route::post
//Route::put
//Route::patch
//Route::delete
//Route::options

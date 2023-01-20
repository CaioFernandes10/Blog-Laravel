<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sobre-nos', function () {
//     return 'informacoes sobre nos';
// });
// Route::get('/contato', function () {
//     return 'informacoes de contato';
// });


//passando por um controller

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');



Route::get('/sobre', [\App\Http\Controllers\SobreController::class, 'index'])->name('site.sobre');

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index'])->name('site.principal');
Route::post('/', [\App\Http\Controllers\PrincipalController::class, 'index'])->name('site.principal');


Route::get('/rota2', [\App\Http\Controllers\ContatoController::class, 'redirecionamento'])->name('site.contato1');
Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('site.fornecedor');


//rota com paramentros
// Route::get('/contato/{nome}/{sobrenome}/{assunto?}', function ($nome,$sobrenome,$assunto ='padrao') {
//         echo "nome: $nome sobrenome: $sobrenome assunto: $assunto";
//      });



Route::get('/contato/{nome}/{categoria_id}', function (string $nome   = "nome nao informado", int $categoria = 1) {
    echo "$nome - $categoria";
})->where('categoria', '[0-9]+')->where('nome', '[A-Za-z]+');



Route::prefix('/app')->group(function () {

    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('app.fornecedores');

    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes');

    Route::get('/login', function () {
        return 'login';
    })->name('app.login');

    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'index'])->name('teste');


Route::fallback(function () {
    echo 'rota acessada nao existe. <a href="' . route('site.principal') . '">clique aqui</a> para voltar para o inicio';
});

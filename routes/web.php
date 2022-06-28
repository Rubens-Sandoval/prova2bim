<?php

use Illuminate\Support\Facades\Route;
use App\Models\cliente;
use Illuminate\Http\Request;

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
    return view('index');
});

Route::get('/visualizar-cliente/{id}', function($id){
    $cliente = Cliente::find($id);
    return view('visualizar', ['cliente' => $cliente]);
});

Route::post('/atualizar', function() {
    return view('atualizar');
});

Route::post('/atualizar-cliente/{id}',function(Request $request, $id){

    $cliente = Cliente::find($id);

    $cliente->update([
        'nome' => $request->nome,
        'email' => $request->email
    ]);

    echo "Cliente alterado com sucesso!";
});

Route::get('/inserir', function () {
    return view('inserir');
});

Route::post('/cadastrar-cliente', function(Request $request){
    Cliente::create([
        'nome' => $request->nome,
        'email' => $request->email
    ]);

    echo "Cliente cadastrado com sucesso!";
});

Route::get('/excluir', function () {
    return view('excluir');
});

Route::get('/excluir-cliente/{id}', function($id){
    $cliente = Cliente::find($id);
    $cliente->delete();

    echo "Cliente excluído com sucesso!";
});

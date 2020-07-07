<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
})->name('index');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::post('/contato', function (Request $request) {

    $route = Redirect::route('contato', ['#retorno']);
    try{
        Mail::send('email', $request->all(), function ($message) use ($request) {
            $message->from('maria.piontkowski@hotmail.com', 'Contato Site');
            $message->subject($request->get('assunto') ?? 'Novo Contato Site');
            $message->to('maria.piontkowski@hotmail.com');
        });
        return $route->with('sucesso', 'E-mail enviado com sucesso.');
    }catch (Exception $e){
        return $route->withErrors('email', 'Houve uma falha ao enviar o e-mail.');
    }

})->name('envia.contato');

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
});

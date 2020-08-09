<?php

use Illuminate\Support\Facades\Route;
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
/*CASINHA*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cadastrar', function () {
    return view('cadastrar');
});

Route::get('/forif/{value}', function ($value) {
    return view('forif')
        ->with('value', $value);
});

Route::get('controller/cadastrar', 'ClientsController@a');

Route::group(['prefix' => '/admin/client'], function () {
    Route::get('/listar', 'ClientsController@Listar');
    Route::get('/form-cadastrar', 'ClientsController@form_cadastrar');
    Route::post('/cadastrado', 'ClientsController@cadastro');
    Route::get('/{value}/form-editar', 'ClientsController@form_editar');
    Route::post('/{value}/editado', 'ClientsController@editar');
    Route::get('/{value}/delete', 'ClientsController@delete');

});

    


/*
Route::post('/cliente/cadastro', function (Request $request) {
    echo $request->name;
};)

*/

/*
Route::get('/cliente', function () {

    //crsf-token//
    $crsfToken = csrf_token();

    $html = <<<HTML
<html>
        <body>
         <h1>CLIENTE</h1>
            <form method="post" action="/cliente/cadastro">
            <input type="hidden" name="_token" value="$crsfToken">
            <input type="text" name="name">
            <button type="submit"> Enviar</button>
            </form>
        </body>
</html>
HTML;
    return $html;
});
*/

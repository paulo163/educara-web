<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});


Route::apiResources([
    'usuarios' => Api\UserController::class,
    'disciplinas' => Api\DisciplinaController::class,
    'objetos' => Api\ObjetoController::class,
    'salas' => Api\SalaController::class,
    'participa' => Api\ParticipaController::class,
]);

//Route::post('objeto/{objeto}/upload', 'Api\ObjetoController@upload')->name('objeto.upload');
Route::get('objeto/{objeto}/download', 'Api\ObjetoController@download')->name('objeto.download');

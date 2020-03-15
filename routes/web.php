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
    return redirect('home');
})->name('inicio');;

//Route::get('calzado/marca', function (){
//    return view('Calzado/marca');
//})->name('marca');


//ABML MARCA
Route::get('calzado/marca', 'MarcaController@index')->name('marca');
Route::get('calzado/marca_editar/{id}', 'MarcaController@editar')->name('marca_editar');
Route::post('calzado/marca_nuevo', 'MarcaController@nuevo')->name('marca_nuevo');


Route::get('calzado/proveedor', function (){
    return view('Calzado.proveedor');
})->name('proveedor');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LogoutController@logout' );

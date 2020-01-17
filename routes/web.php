<?php

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
//Route::get('/todos', function () {
    //return view('todos.todos');
//});
route::get('todos','todosController@index');
route::get('todos/{id}','todosController@show');
route::get('/create','todosController@create');
route::post('/create','todosController@store');
/*route::get('/edit',function(){
    return view('todos.edit');
});*/
route::get('/todos/{todo}/edit','todosController@edit');
//route::post('todos/{id}','todosController@update');
route::post('todos/{todo}','todosController@update');
route::get('todos/{id}/delete','todosController@destroy');
route::get('todos/{todo}/delete','todosController@destroy');
route::get('todos/{complete}/completed','todosController@completed');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

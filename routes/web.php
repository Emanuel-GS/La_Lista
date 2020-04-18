<?php

use Illuminate\Support\Facades\Route;
 

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('types', 'Cat_TypeController');

// Menu Principal
Route::get('/','PagesController@inicio')->name('inicio'); 
// Route::get('perfil','PagesController@perfil')->name('perfil'); 
// Route::get('mianuncio','PagesController@mianuncio')->name('mianuncio'); 
// Route::get('nosotros', 'PagesController@nosotros')->name('nosotros');

// // Seccion Busco
// Route::get('buscoempleo', 'PagesController@buscoempleo')->name('busco.buscoempleo');
// Route::get('buscoempleo/{id}', 'PagesController@b_empleodetalle')->name('busco.b_empleodetalle');

// Seccion Ofrezo
Route::get('ofrezcoempleo', 'PagesController@ofrezcoempleo')->name('ofrezco.ofrezcoempleo');
Route::post('ofrezcoempleo', 'PagesController@o_crearempleo')->name('ofrezco.o_crearempleo'); 
// Route::get('ofrezcoempleo/detalle/{id}', 'PagesController@o_empleodetalle')->name('ofrezco.o_empleodetalle');
// Route::get('ofrezcoempleo/editar/{id}', 'PagesController@o_empleoeditar')->name('ofrezco.o_empleoeditar');
// Route::put('ofrezcoempleo/editar/{id}', 'PagesController@o_empleoeditar_update')->name('ofrezco.o_empleoeditar_update');
// Route::delete('ofrezcoempleo/eliminar/{id}', 'PagesController@o_empleoeliminar')->name('ofrezco.o_empleoeliminar');

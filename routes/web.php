<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/hello', HomeController::class);
Route::get('post/mensaje', [PostController::class, 'Mensaje']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('post/about/{param?}/{name}',[PostController::class, 'About']);
Route::get('post/contacto',[PostController::class,'Contacto']);
Route::get('/Principal', [PrincipalController::class, 'index']);
Route::get('/Llamado',[PostController::class, 'llamado_componente']);

Route::get('/principalpagina',[PostController::class,'principal']);

Route::get('/', function(){
    return view('welcome');
});



Route::get('/hello/{d}', function ($d=null){
    return "hello, world! {$d}";
})->where('d','[0-9]+');


Route::get('/hello/{x}', function ($x=null){
    return "hello, world! {$x}";
})->where('x','\w+');

Route::get('/principal', function (){
    return 'Bienvenido a la pagina principal';
});

Route::get('/about/{param?}', function ($p=null){
    if(($p==null)||(empty($p))){
        return "No se ingreso ningun parametro";
    }
    return "El parametro ingresado es: {$p}";
});





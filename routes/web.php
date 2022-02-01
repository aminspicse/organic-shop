<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function() {
	Route::get('/',function(){
        return 0;
    });
	//Route::resource('/post',PostController::class);
    
});
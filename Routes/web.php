<?php
use Classes\Route;

Route::get('/','Http\WelcomeController@index');
Route::notFound(function(){
  return view('errors.404');
});


 ?>

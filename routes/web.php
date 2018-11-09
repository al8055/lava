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

//URL::forceScheme('https');


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');    

//Route::group(['middleware'=>'forceSsl'], function(){
  //  Route::resource('posts', 'PostsController');    
//});

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/dashboard', 'DashboardController@index');

/*
Route::get('/old', function () {
    return view('welcome');
});

Route::get('/', 'Play@ask');
Route::post('/resp', ['uses'=>'Play@showme']);
Route::post('/fupload', ['uses' => 'Play@fupload']);
Route::get('/showimg/{iname}', function($iname){
    $path = storage_path($iname);
    $mime = \File::mimeType($path);
    header('Content-type: ' . $mime);
    return readfile($path);
});
Route::get('/alerts', ['uses' => 'Play@alerts']);
//Route::resource('playr', 'Play');
//Route::get('/regnum/{id}', 'Play@regnum')->where('id', '[0-9]+');
//Route::get('/test', 'Play@answer');    
*/

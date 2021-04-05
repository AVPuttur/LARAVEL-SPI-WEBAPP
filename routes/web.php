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
    return view('welcome');
});

// Route::resource('/posts/{id}','RetrieveController@retrieve');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@retrieveData')->name('home');

Route::get('/posts', 'PostController@index');

Route::post('/posts', 'PostController@save')->name('posts');

Route::resource('blogs','WelcomeController');

Route::resource('blogs','RetrieveController');

Route::get('/','WelcomeController@retrieve');

Route::get('/allposts','RetrieveController@index');

Route::get('/allposts','RetrieveController@retrieveAll');

Route::get('test', function () {

    $user = [
        'name' => 'Mahedi Hasan',
        'info' => 'Laravel Developer'
    ];

    \Mail::to('mail@codechief.org')->send(new \App\Mail\NewMail($user));

    dd("success");

});


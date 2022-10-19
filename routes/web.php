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
Route::get('/hello', function () {
    echo "hello World";
});
Route::get('/datadiri/nrp', function () {
    echo "Nama Saya Naufal","200613014";
});
Route::get('/nrp', function () {
    echo "Nrp Saya 200613014";
});
Route::get('/biodata/{name}/{nrp}', function ($name ,$nrp) {
    echo "Ryan Budiawan","200613014". $name , $nrp;
})->where([
    "nama" => "[a-Za-a]+",
    "nrp" => "[0-9]+"
]);

Route::get('/data/{data?}', function ($data = "kosong") {
    return "Isi Paramater=". $data;
});

Route::get('/person', 'PersonController@index'); 
Route::get('/person/show/{param}', 'PersonController@show');

route::resource('student','StudentController');
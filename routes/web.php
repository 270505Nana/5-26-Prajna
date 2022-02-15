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

Route::get('/', function (){
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function (){
    return view('about', [
        "title" => "Home",
        "nama" => "Prajna Paramitha Wardhany",
        "email" => "prajna270505@gmail.com",
        "gambar" => "foto.jpeg"
        ]);
});

Route::get('/gallery', function (){
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
Route::resource('/contacts', ContactController::class);

use App\Http\Controllers\ContactController;
 

?>
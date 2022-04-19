<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('index', [
        "title" => "Beranda"
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
// Route::resource('/contacts', ContactController::class);

Route::get('/contacts/create', [ContactController::class, 'edit'])->name('contacts.edit');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/(id)/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/(id)/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

//Artinya semua route yang ada di middle ware bisa diakses kalo udah login, kalau belum login
// Redirect ke halaman login

 

?>


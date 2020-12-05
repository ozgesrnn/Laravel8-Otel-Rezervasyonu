<?php

use App\Http\Controllers\HomeController;
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
Route::redirect('/anasayfa', '/home'); //anasayfa ya giderken bile home gitmesini sağladık

Route::get('home', function () {
    return view('home.index', ['name' => 'Ozge Sirin']); // bu şekilde yönlendirme yapabiliyoruz home da name yazdırdık.

//Route::get('home', function () {
   // return view('home.index'); // home sayfasına direk homecontroller sız gitmesini sağladık.
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test']) -> where(['id'=> '[0-9]+', 'name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test']) -> whereNumber('id')-> whereAlpha('name')->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use app\Http\Controllers\HomeController as HomeControllers;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;

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
    return view('home.index');

});
/*Route::get('/home2', function () {
    return view('welcome');

});*/
Route::get('/anasayfa',[HomeController::class, 'index'])->name('anasayfa');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/hotel/{id}/{slug}', [HomeController::class, 'rezervasyon'])->name('hotel');
Route::get([HomeController::class, 'categoryhotels'], '/categoryhotels/{id}/{slug}')->name('categoryhotels');
Route::get('/search_page', [HomeController::class, 'search_page'])->name('search_page');
Route::get('/review', [HomeController::class, 'review'])->name('review');
Route::post('/gethotel', [HomeController::class, 'gethotel'])->name('gethotel');
Route::get('/hotellist/{search}', [HomeController::class, 'hotellist'])->name('hotellist');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::post('/sendreview/{id}/{slug}', [HomeController::class, 'sendreview'])->name('sendreview');
Route::get('/rezervasyon/{id}', [HomeController::class, 'hotel'])->name('rezervasyon');


/*Route::get('/categoryhotels/{id}' , [HomeController::class, 'categoryhotels'])->name('categoryhotels');
Route::get('/hotel/{id}' , [HomeController::class, 'hotel'])->name('hotel');
Route::get('/rezervasyon/{id}' , [HomeController::class, 'hotel'])->name('rezervasyon');
Route::post('/gethotel', [App\Http\Controllers\HomeController::class, 'gethotel'])->name('gethotel');
Route::get('/hotellist/{search}', [App\Http\Controllers\HomeController::class, 'hotellist'])->name('hotellist');*/


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Hotel
    Route::prefix('hotel')->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\HotelController::class, 'index'])->name('admin_hotel');
        Route::get('create', [\App\Http\Controllers\Admin\HotelController::class, 'create'])->name('admin_hotel_create');
        Route::post('store', [\App\Http\Controllers\Admin\HotelController::class, 'store'])->name('admin_hotel_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'edit'])->name('admin_hotel_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'update'])->name('admin_hotel_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'destroy'])->name('admin_hotel_delete');
        Route::get('show', [\App\Http\Controllers\Admin\HotelController::class, 'show'])->name('admin_hotel_show');
    });

    //Room
    Route::prefix('room')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\RoomController::class,'index'])->name('admin_rooms');
        Route::get('create',[\App\Http\Controllers\Admin\RoomController::class,'create'])->name('admin_room_add');
        Route::post('store',[\App\Http\Controllers\Admin\RoomController::class,'store'])->name('admin_room_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\RoomController::class,'edit'])->name('admin_room_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\RoomController::class,'update'])->name('admin_room_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\RoomController::class,'destroy'])->name('admin_room_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\RoomController::class,'show'])->name('admin_room_show');


    });

    #Message
    Route::prefix('messages')->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
    });

    #Image
    Route::prefix('image')->group(function () {
        Route::get('create/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #reviews
    Route::prefix('review')->group(function (){

        Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('admin_review');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'edit'])->name('admin_review_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::post('show',[\App\Http\Controllers\Admin\ReviewController::class,'show'])->name('admin_review_show');
    });

    #rezervasyon
    Route::prefix('rezervasyon')->group(function (){

        Route::get('/',[\App\Http\Controllers\Admin\RezervasyonController::class,'index'])->name('admin_rezervasyon');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\RezervasyonController::class,'edit'])->name('admin_rezervasyon_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\RezervasyonController::class,'update'])->name('admin_rezervasyon_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\RezervasyonController::class,'destroy'])->name('admin_rezervasyon_delete');
        Route::post('show',[\App\Http\Controllers\Admin\RezervasyonController::class,'show'])->name('admin_rezervasyon_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting_edit');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/',[UserController::class, 'index'])->name('myprofile');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile',[UserController::class,'index'])->name('profile');
//review
    Route::prefix('review')->group(function (){

        Route::get('/',[\App\Http\Controllers\ReviewController::class,'index'])->name('user_review');
        Route::post('update/{id}',[\App\Http\Controllers\ReviewController::class,'update'])->name('user_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ReviewController::class,'destroy'])->name('user_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\ReviewController::class,'show'])->name('user_review_show');

    });
    Route::prefix('rezervasyon')->group(function (){

        Route::get('/',[RezervasyonController::class,'index'])->name('user_rezerve');
        Route::post('update/{id}',[RezervasyonController::class,'update'])->name('user_rezerve_update');
        Route::get('delete/{id}',[RezervasyonController::class,'destroy'])->name('user_rezerve_delete');
        Route::get('show/{id}',[RezervasyonController::class,'show'])->name('user_rezerve_show');

    });

});
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController:: class,'logout'])->name('admin_logout');


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');








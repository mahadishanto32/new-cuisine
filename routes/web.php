<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontendController::class)->group(function () {
    Route::get('/','index')->name('homePage');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::get('/menu','menu')->name('menu');
    Route::get('/news','news')->name('news');
    Route::get('/news-detail','news_details')->name('news-detail');
});

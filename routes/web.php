<?php

use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
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
})->name('home');
Route::get('/overview', function () {
    return view('overview');
})->name('overview');

Route::get('/overview', function () {
    return view('overview');
})->name('overview');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/community', function () {
    return view('community');
})->name('community');

Route::get('/hyperas-faq', function () {
    return view('hyperas-faq');
})->name('hyperas-faq');
Auth::routes();
Route::get('/pagination/news-blog', function () {
    return view('/pagination/news-blog');
})->name('/pagination/news-blog');

Route::get('/brand-kit', function () {
    return view('brand-kit');
})->name('brand-kit');
Auth::routes();

Route::get('/hyra-token', function () {
    return view('hyra-token');
})->name('hyra-token');

Route::get('/guide-line', function () {
    return view('guide-line');
})->name('guide-line');
Auth::routes();

Route::get('/hyra-validator', function () {
    return view('hyra-validator');
})->name('hyra-validator');
Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});

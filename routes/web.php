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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/overview', function () {
    return view('overview');
})->name('overview');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/community', function () {
    return view('community');
})->name('community');

Route::get('/staking', function () {
    return view('staking');
})->name('staking');

Route::get('/contact', function () {
    return view('hyra-contact');
})->name('hyra-contact');

Route::get('/faq', function () {
    return view('hyra-faq');
})->name('hyra-faq');

Route::get('/news', function () {
    if( request()->has('category') ) {
        $news = News::where([
            ['category', request()->category],
            ['active', true],
        ])->get();
        return view('news-blog')->with(compact('news'));
    } else {
        $news = News::where('active', true)->get();
        return view('news-blog')->with(compact('news'));
    }
    
})->name('news');

Route::get('/brand-kit', function () {
    return view('brand-kit');
})->name('brand-kit');

Route::get('/token', function () {
    return view('hyra-token');
})->name('hyra-token');

Route::get('/guide-line', function () {
    return view('guide-line');
})->name('guide-line');

Route::get('/validator', function () {
    return view('hyra-validator');
})->name('hyra-validator');
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});

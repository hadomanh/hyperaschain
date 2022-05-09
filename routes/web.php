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

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/overview', function () {
    return view('overview');
})->name('overview');

=======
=======
Route::get('/overview', function () {
    return view('overview');
})->name('overview');
>>>>>>> 54adab6f516a636f7ddb9c245c689e528c4cf87a
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/community', function () {
    return view('community');
})->name('community');
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> 54adab6f516a636f7ddb9c245c689e528c4cf87a
Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});

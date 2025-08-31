<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;
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

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Language switching
Route::get('/language/{locale}', [\App\Http\Controllers\LanguageController::class, 'switchLanguage'])->name('language.switch');

Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MypageController;


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

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/wordsearch', [IndexController::class, 'wordsearch'])->name('wordsearch');

Route::get('/jobsearch', [IndexController::class, 'jobsearch'])->name('jobsearch');

Route::get('/tagsearch', [IndexController::class, 'tagsearch'])->name('tagsearch');

Route::get('/logout', [Indexcontroller::class, 'logout']);

Route::get('/nav', [UsersController::class, 'index'])->name('users.index');

Route::get('/mypage', [MypageController::class, 'index'])->name('mypage.index');
Route::get('/mypage/create', [MypageController::class, 'create'])->name('mypage.create');
Route::post('/mypage/store', [MypageController::class, 'store'])->name('mypage.store');


require __DIR__.'/auth.php';

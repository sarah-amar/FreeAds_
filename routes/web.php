<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/user', [UserController::class, 'index']);

Route::post('/upload', [UserController::class, 'uploadAvatar']);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\Shop\MainController::class, 'index'])->name('index');

Route::get('/produit/{id}',[App\Http\Controllers\Shop\MainController::class, 'produit'])->name('voir_produit');

Route::get('/category/{id}', [App\Http\Controllers\Shop\MainController::class, 'viewByCategory'])->name('products_by_cat');

Route::get('/annonce', [App\Http\Controllers\AdController::class, 'create'])->middleware(['auth', 'verified'])->name('create');

Route::post('/annonce/create', [App\Http\Controllers\AdController::class, 'store'])->name('create.store');

Route::get('/annonce/create', function (Request $request){});

Route::get('/message', [\App\Http\Controllers\MessageController::class, 'create'])->name('message.create');

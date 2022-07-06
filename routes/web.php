<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;
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

Route::get('/', [FacebookController::class, 'handleLogout']);
Route::get('/login', [FacebookController::class, 'login'])->name('login');
Route::get('/facebook', [FacebookController::class, 'facebook'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::POST('/postStore', [FacebookController::class, 'postStore'])->middleware(['auth'])->name('post.tore');
Route::POST('/addFriend/{id?}', [FacebookController::class, 'addFriend'])->middleware(['auth'])->name('add.friend');
Route::POST('/status/{id?}', [FacebookController::class, 'status'])->middleware(['auth'])->name('status');
Route::POST('/changeStatus/{friendid?}/{statusid?}', [FacebookController::class, 'changeStatus'])->middleware(['auth'])->name('changeStatus');

Route::get('/chat', function(){
    return view('Chatify::pages.app');
});
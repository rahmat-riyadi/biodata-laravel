<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
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

Route::get('/', [MemberController::class, 'index']);
Route::get('/member/{member}', [MemberController::class, 'show']);
Route::get('/login', fn () => view('login'))->name('login')->middleware('guest');
Route::post('/login', [AdminController::class, 'authenticate']);

Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin/add', fn () => view('dashboard.add'));
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin', [AdminController::class, 'store']);
    Route::get('/admin/detail/{member}', [AdminController::class, 'show']);
    Route::put('/admin/detail/{member}', [AdminController::class, 'update']);
    Route::delete('/admin/detail/{member}', [AdminController::class, 'destroy']);
    Route::post('/logout', [AdminController::class, 'logout']);
});


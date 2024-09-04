<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisudawanController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('Admin.album.update');
// });

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/search4', [IndexController::class, 'search'])->name('search4');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/album', [AlbumController::class, 'index'])->name('Admin.album.album');
Route::get('/album/{id}', [AlbumController::class, 'show'])->name('album.show');
Route::get('/search', [AlbumController::class, 'search'])->name('search');

Route::get('/wisudawan', [WisudawanController::class, 'index'])->name('Admin.wisudawan.wisudawan');
Route::get('/search3', [WisudawanController::class, 'search'])->name('search3');

Route::get('/video', [VideoController::class, 'index'])->name('Admin.video.video');
Route::get('/search2', [VideoController::class, 'search'])->name('search2');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/album/create', [AlbumController::class, 'create'])->name('album.create');
    Route::post('/album/create', [AlbumController::class, 'store'])->name('album.store');
    Route::get('/album/{id}/edit', [AlbumController::class, 'edit'])->name('album.edit');
    Route::put('/album/{id}', [AlbumController::class, 'update'])->name('album.update');
    Route::delete('/album/{id}', [AlbumController::class, 'destroy'])->name('Admin.album.destroy');

    Route::get('/wisudawan/create', [WisudawanController::class, 'create'])->name('wisudawan.create');
    Route::post('/wisudawan/create', [WisudawanController::class, 'store'])->name('wisudawan.store');
    Route::get('/wisudawan/{id}/edit', [WisudawanController::class, 'edit'])->name('wisudawan.edit');
    Route::put('/wisudawan/{id}', [WisudawanController::class, 'update'])->name('wisudawan.update');
    Route::delete('/wisudawan/{id}', [WisudawanController::class, 'destroy'])->name('Admin.wisudawan.destroy');
    

    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/video/create', [VideoController::class, 'store'])->name('video.store');
    Route::get('/video/{id}/edit', [VideoController::class, 'edit'])->name('video.edit');
    Route::put('/video/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::delete('/video/{id}', [VideoController::class, 'destroy'])->name('Admin.video.destroy');

});

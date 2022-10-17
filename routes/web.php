<?php

use App\Http\Controllers\KuesionerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome', []);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/adm', function () {
    return view('admin', [
        "title" => "Dashboard Admin"
    ]);
}); 

Route::get('/home/{slug}', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/kusioner', [KuesionerController::class, 'saveAnwere'])->name("insertKusioner");

Route::get('/kusioner', [KuesionerController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::resource('/dashboard/posts', App\Http\Controllers\UserResultController::class);


require __DIR__ . '/auth.php';

Auth::routes();

<?php


use Illuminate\Support\Facades\Route;
use App\Models\Home;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
    return view('welcome',[
    "title" => "Welcome"
    ]);
});

Route::get('/adm', function () {
    return view('admin',[
    "title" => "Dashboard Admin"
    ]);
});
Route::get('/about', function () {
    return view('about', [
    "title" => "Tentang"
    ]);
});

Route::get('/home/{slug}', [HomeController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/kusioner', function () {
    return view('kusioner',[
    "title" => "Kusioner"
    ]);
});
Route::get('/dashboard',function() {
    return view('dashboard.index');
});
Route::resource('/dashboard/posts', PostController::class);
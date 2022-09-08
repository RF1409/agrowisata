<?php


use App\Models\Catagory;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCatagoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaniController;
use App\Http\Controllers\AllTaniController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AllTransaksiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PesanController;

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
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/catagories', function () {
    return view('catagories', [
        'title' => 'Post Catagories',
        'catagories' => Catagory::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function() {
    return view('dashboard.index');
}) ->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']) 
->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Middleware('auth') di gunaka untuk membatasi bahwa hanya user yang sudah login yang bisa masuk

Route::resource('/dashboard/catagories', AdminCatagoryController::class)->except('show')->middleware('admin');
// hanya bisa di buka oleh admin

Route::resource('/dashboard/users', UserController::class)->middleware('admin');

Route::resource('/dashboard/tanis', TaniController::class)->middleware('auth');

Route::resource('/dashboard/alltanis', AllTaniController::class)->middleware('auth');

Route::resource('/dashboard/transaksis', TransaksiController::class)->middleware('auth');

Route::resource('/dashboard/alltransaksis', AllTransaksiController::class)->middleware('admin');

Route::get('/dashboard/contact', [ContactController::class, 'index'])->middleware('auth'); 


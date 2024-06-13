<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InternationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|-------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|----------------------------------------------------------
| Adminlar ko'raoladigan qism
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::resource('/home', HomeController::class);
        Route::resource('/about', AboutController::class);
        Route::resource('/contact', ContactController::class);
        Route::resource('/service', ServiceController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/information', InformationController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/commit', CommitController::class);
        Route::resource('/post', PostController::class);
        Route::resource('/internation', InternationController::class);
        Route::get('/profile', [UserController::class, 'index'])->name('user-index');
        Route::resource('/profile', UserController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/service/{category}', [MainController::class, 'singleService'])->name('singleService');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [MainController::class, 'singleBlog'])->name('singleBlog');
Route::get('/{lang}', function ($lang){

    session(['lang' => $lang]);

    return back();
});

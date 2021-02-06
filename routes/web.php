<?php

use App\Models\Post;
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

Route::get('/home', function () {
    $posts=Post::all();
    return view('home.home')->with([
        'posts'=>$posts,
    ]);
});



Route::get('/login', [App\Http\Controllers\AuthController::class, 'userlogin'])->name('Auth.login');
Route::post('/post', [App\Http\Controllers\AuthController::class, 'postLogin'])->name('Auth.postLogin');

Route::get('/signup', [App\Http\Controllers\AuthController::class, 'userSignup'])->name('Auth.signup');
Route::post('/signup', [App\Http\Controllers\AuthController::class, 'postSignup'])->name('Auth.postsignup');



Route::get('/admin/index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
Route::get('/admin/table', [App\Http\Controllers\AdminController::class, 'table'])->name('admin.table');
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'register'])->name('admin.register');


Route::get('/admin/dashboardsignup', [App\Http\Controllers\AdminController::class, 'getAdminSignup'])->name('admin.dashboradsignup');
Route::post('/admin/dashboardsignup', [App\Http\Controllers\AdminController::class, 'postAdminSigup'])->name('admin.dashboardsignup');
Route::get('/admin/dashboardlogin', [App\Http\Controllers\AdminController::class, 'getAdminSignin'])->name('admin.dashboardlogin');
Route::post('/admin/dashboardlogin', [App\Http\Controllers\AdminController::class, 'postAdminlogin'])->name('admin.dashboardlogin');
Route::get('admin/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('admin.edit');
Route::post('admin/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('admin.update');



Route::post('/admin/post', [App\Http\Controllers\PostController::class, 'store'])->name('post');

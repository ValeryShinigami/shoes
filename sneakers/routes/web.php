<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



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

Auth::routes();

Route::get('logout', function () 
{
    Auth::logout();
    Session::flush();
    return redirect()->route('login');

});

Route::get('/user/index', [App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
Route::get('/admin/index', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');

//Route::get('/admin/hommes/index', [App\Http\Controllers\Admin\HommeController::class, 'index'])->name('admin.hommes.index');
Route::get('/admin/femmes/index', [App\Http\Controllers\Admin\FemmeController::class, 'index'])->name('admin.femmes.index');
Route::get('/admin/enfants/index', [App\Http\Controllers\Admin\EnfantController::class, 'index'])->name('admin.enfants.index');

//Route::get('/admin/categories/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories.index');
//Route::get('/admin/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.categories.create');
//Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');
//Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
//Route::put('/admin/categories/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.categories.update');
//Route::delete('/admin/categories/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.categories.delete');

Route::get('/admin/hommes/index', [App\Http\Controllers\Admin\HommeController::class, 'index'])->name('admin.hommes.index');
Route::get('/admin/hommes/create', [App\Http\Controllers\Admin\HommeController::class, 'create'])->name('admin.hommes.create');
Route::post('/admin/hommes/store', [App\Http\Controllers\Admin\HommeController::class, 'store'])->name('admin.hommes.store');
//faire edit et delete


Route::get('/admin/posts/index', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/posts/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');



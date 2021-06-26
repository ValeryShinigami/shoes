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

Route::get('/admin/hommes/index', [App\Http\Controllers\Admin\HommeController::class, 'index'])->name('admin.hommes.index');
Route::get('/admin/femmes/index', [App\Http\Controllers\Admin\FemmeController::class, 'index'])->name('admin.femmes.index');
Route::get('/admin/enfants/index', [App\Http\Controllers\Admin\EnfantController::class, 'index'])->name('admin.enfants.index');

Route::get('/admin/categories/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');





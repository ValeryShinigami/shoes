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
//route pour la création des produits en nouveautés sur la page principale
Route::get('/admin/index/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('admin.create');


Route::get('/admin/categories/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');
//Route::get('/admin/categories/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
//Route::put('/admin/categories/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.categories.update');
//Route::delete('/admin/categories/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.categories.delete');



Route::get('/admin/posts/index', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/posts/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');


//création de la route produits homme OK
Route::get('/admin/produits/index', [App\Http\Controllers\Admin\ProduitController::class, 'index'])->name('admin.produits.index');
//création de la route du détail du produit homme OK
Route::get('/admin/produits/create/{id}', [App\Http\Controllers\Admin\ProduitController::class, 'create'])->name('admin.produits.create');


//création de la route des Marques pour trier les produits par marque OK
Route::get('/admin/marques/create/{id}', [App\Http\Controllers\Admin\MarqueController::class, 'create'])->name('admin.marques.create');

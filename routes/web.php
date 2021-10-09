<?php




use TCG\Voyager\Facades\Voyager;
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

// Route::get('/', function () {
 //   return view('welcome');
//});

Auth::routes();

Route::get('logout', function () 
{
    Auth::logout();
    Session::flush();
    return redirect()->route('login');

});

Route::get('/', [App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');
Route::get('/admin/index', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');

//route pour la création des produits en NOUVEAUTÉS sur la page principale
Route::get('/admin/index/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('admin.create');
Route::get('/user/index/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('user.create');


Route::get('/admin/posts/index', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/posts/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.posts.store');


//création de la route produits homme OK
Route::get('/admin/produits/index', [App\Http\Controllers\Admin\ProduitController::class, 'index'])->name('admin.produits.index');
Route::get('/user/produits/index', [App\Http\Controllers\User\ProduitController::class, 'index'])->name('user.produits.index');



//création de la route du détail du produit homme OK
Route::get('/admin/produits/create/{id}', [App\Http\Controllers\Admin\ProduitController::class, 'create'])->name('admin.produits.create');
Route::get('/user/produits/create/{id}', [App\Http\Controllers\User\ProduitController::class, 'create'])->name('user.produits.create');

//création de la route du détail du product NOUVEAUTÉ homme
Route::get('/admin/products/store/{id}', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
Route::get('/user/products/store/{id}', [App\Http\Controllers\User\ProductController::class, 'store'])->name('user.products.store');


//création de la route des Marques pour trier les produits par marque OK
Route::get('/admin/marques/create/{id}', [App\Http\Controllers\Admin\MarqueController::class, 'create'])->name('admin.marques.create');
Route::get('/user/marques/create/{id}', [App\Http\Controllers\User\MarqueController::class, 'create'])->name('user.marques.create');


//création de la route des tags OK
Route::get('/admin/tags/index/{id}', [App\Http\Controllers\Admin\TagController::class, 'create'])->name('admin.tags.create');

//création de la route Cart
Route::get('/admin/carts/index', [App\Http\Controllers\Admin\CartController::class, 'index'])->name('admin.carts.index');
Route::post('/admin/carts/add/{id}', [App\Http\Controllers\Admin\CartController::class, 'add'])->name('admin.carts.add');
Route::put('/admin/carts/update/{id}', [App\Http\Controllers\Admin\CartController::class, 'update'])->name('admin.carts.update');
Route::delete('/admin/carts/delete/{id}', [App\Http\Controllers\Admin\CartController::class, 'destroy'])->name('admin.carts.delete');

Route::get('/user/carts/index', [App\Http\Controllers\User\CartController::class, 'index'])->name('user.carts.index');
Route::post('/user/carts/add/{id}', [App\Http\Controllers\User\CartController::class, 'add'])->name('user.carts.add');
Route::put('/user/carts/update/{id}', [App\Http\Controllers\User\CartController::class, 'update'])->name('user.carts.update');
Route::delete('/user/carts/delete/{id}', [App\Http\Controllers\User\CartController::class, 'destroy'])->name('user.carts.delete');
Route::delete('/user/carts/clear', [App\Http\Controllers\User\CartController::class, 'clear'])->name('user.carts.clear');
Route::delete('/user/carts/clear2', [App\Http\Controllers\User\CartController::class, 'clear2'])->name('user.carts.clear2');


//création de la route Cart pour product (produit NOUVEAUTé)

Route::get('/user/cartsp/index', [App\Http\Controllers\User\CartpController::class, 'index'])->name('user.cartsp.index');
Route::post('/user/cartsp/add/{id}', [App\Http\Controllers\User\CartpController::class, 'add'])->name('user.cartsp.add');
Route::put('/user/cartsp/update/{id}', [App\Http\Controllers\User\CartpController::class, 'update'])->name('user.cartsp.update');
Route::delete('/user/cartsp/delete/{id}', [App\Http\Controllers\User\CartpController::class, 'destroy'])->name('user.cartsp.delete');


Route::get('/admin/cartsp/index', [App\Http\Controllers\Admin\CartpController::class, 'index'])->name('admin.cartsp.index');
Route::post('/admin/cartsp/add/{id}', [App\Http\Controllers\Admin\CartpController::class, 'add'])->name('admin.cartsp.add');
Route::put('/admin/cartsp/update/{id}', [App\Http\Controllers\Admin\CartpController::class, 'update'])->name('admin.cartsp.update');
Route::delete('/admin/cartsp/delete/{id}', [App\Http\Controllers\Admin\CartpController::class, 'destroy'])->name('admin.cartsp.delete');

//création de la route MAINTENANCE
//route maintenance femmes
Route::get('/user/maintenance/index', [App\Http\Controllers\User\MaintenanceController::class, 'index'])->name('user.maintenance.index');
//route maintenance kids
Route::get('/user/maintkids/index', [App\Http\Controllers\User\MaintkidsController::class, 'index'])->name('user.maintkids.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

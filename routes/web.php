<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\page\CartController;
use App\Http\Controllers\page\CheckoutPageController;
use App\Http\Controllers\page\LoginPageController;
use App\Http\Controllers\page\OrderPageController;
use App\Http\Controllers\page\RegisterPageController;
use App\Http\Controllers\page\PageController;
use App\Http\Controllers\PostController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// frontend
Route::get('/', [PageController::class, 'homePage'])->name('homePage');
Route::get('/login', [LoginPageController::class, 'loginPage'])->name('viewLogin');
Route::post('/login', [LoginPageController::class, 'login'])->name('userLogin');
Route::get('/register', [RegisterPageController::class, 'getViewRegister'])->name('getRegister');
Route::post('/register', [RegisterPageController::class, 'register'])->name('userRegister');



// page
Route::get('/products', [PageController::class, 'getProducts'])->name('products');
Route::get('/product-detail/{id}', [PageController::class, 'getProductDetail'])->name('productDetail');
Route::get('/products-categories/{id}', [PageController::class, 'getProductIPhone'])->name('productCategory');

Route::get('/contact', [PageController::class, 'getContact'])->name('viewcontact');
Route::post('/contact', [PageController::class, 'postContact'])->name('postContact');

Route::get('/search', [PageController::class, 'index'])->name('search');
Route::get('/search', [PageController::class, 'index'])->name('search');


Route::group(['prefix' => 'cart'], function () {
    Route::get('/list', [CartController::class, 'cartPage'])->name('viewCart');
    Route::get('/list/{id}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::put('/update/{id}', [CartController::class, 'updateCart'])->name('updateCart');
    Route::delete('/delete', [CartController::class, 'deleteItemCart'])->name('deleteItemCart');

    Route::get('/checkout', [CheckoutPageController::class, 'checkoutPage'])->name('checkoutPage');
    Route::post('/order', [OrderPageController::class, 'createOrder'])->name('createOrder');
    Route::get('/order/detail/{id}', [OrderPageController::class, 'orders_detail'])->name('ordersDetail');
    Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('delete_order');
});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/list-posts', [PageController::class, 'getListPosts'])->name('getlistPosts');
    Route::get('/posts-detail/{id}', [PageController::class, 'getDetailPosts'])->name('postsDetail');
});

Route::get('/user', [PageController::class, 'infoUser'])->name('getUser');
Route::post('/logout', [LoginPageController::class, 'logout'])->name('userLogout');


// backend
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('getLoginAdmin');
    Route::post('/', [AuthController::class, 'postLogin'])->name('postLoginAdmin');

    Route::group(['middleware' => 'adminLogin'], function () {
        Route::get('/users', [UserController::class, 'index'])->name('getListUser');
        Route::get('/info/{id}', [UserController::class, 'edit'])->name('infoUser');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete_User');
        // products
        Route::group(['prefix' => 'products'], function () {
            Route::get('/list', [ProductController::class, 'index'])->name('listProduct');
            Route::get('/create', [ProductController::class, 'create'])->name('createProduct');
            Route::post('/store', [ProductController::class, 'store'])->name('postCreate');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('editProduct');
            Route::put('/edit/{id}', [ProductController::class, 'update'])->name('updateProduct');
            Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');
        });
        // category
        Route::group(['prefix' => 'category'], function () {
            Route::get('/list', [CategoriesController::class, 'index'])->name('listCategory');
            Route::get('/create', [CategoriesController::class, 'create'])->name('createCategory');
            Route::post('/store', [CategoriesController::class, 'store'])->name('postCreateCategory');
            Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('editCategory');
            Route::put('/edit/{id}', [CategoriesController::class, 'update'])->name('updateCategory');
            Route::delete('/delete/{id}', [CategoriesController::class, 'destroy'])->name('deleteCategory');
        });
        // posts
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/list', [PostController::class, 'index'])->name('listPosts');
            Route::get('/create', [PostController::class, 'create'])->name('createPost');
            Route::post('/store', [PostController::class, 'store'])->name('postPosts');
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('editPosts');
            Route::put('/edit/{id}', [PostController::class, 'update'])->name('updatePosts');
            Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('deletePosts');
        });
        // banner
        Route::group(['prefix' => 'banner'], function () {
            Route::get('/list', [BannerController::class, 'index'])->name('listBanner');
            Route::get('/create', [BannerController::class, 'create'])->name('createBanner');
            Route::post('/store', [BannerController::class, 'store'])->name('postBanner');
            Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('editBanner');
            Route::put('/edit/{id}', [BannerController::class, 'update'])->name('updateBanner');
            Route::delete('/delete/{id}', [BannerController::class, 'destroy'])->name('deleteBanner');
        });
        // contact
        Route::group(['prefix' => 'contact'], function () {
            Route::get('/list', [ContactController::class, 'index'])->name('listContact');
            Route::get('/list/{id}', [ContactController::class, 'edit'])->name('infoContact');
            Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('deleteContact');
        });
        Route::get('order', [OrderController::class, 'index'])->name('order');
        Route::get('order/detail/{id}', [OrderController::class, 'order_Detail'])->name('order_Detail');
        Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('delete_item');
        Route::put('edit/{id}', [OrderController::class, 'update'])->name('update_status');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});

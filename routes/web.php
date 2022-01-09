<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UploadController;
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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/products',[HomeController::class,'products'])->name('products');
Route::get('/add',[HomeController::class,'getAdd'])->name('getAdd');
Route::post('/add',[HomeController::class,'postAdd'])->name('postAdd');
//Client Route
Route::prefix('categories')->group(function () {
  //Danh sach chuyen muc
   Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

   //Lay Danh sach 1 chuyen muc (Ap dung show form sua chuyen muc)
   Route::get('/edit/{id}', [CategoriesController::class, 'getCategory']);

    //Xu ly update chuyen muc
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    //Hien thi form add du lieu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

     //Xu ly form them chuyen muc
     Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

      //Delete chuyen muc
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});
Route::prefix('admin')->group(function (){
    Route::get('logout', [LoginController::class,'logout'])->name('logout');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
    Route::middleware('auth')->group(function (){
        Route::get('/', [DashboardController::class,'index'])->name('admin')->middleware('auth');
        //Route::resource('products', ProductController::class);
        //Menu
        Route::prefix('menus')->group(function (){
            Route::get('add',[MenuController::class,'create']);
            Route::post('add',[MenuController::class,'store']);
            Route::get('list',[MenuController::class,'index']);
            Route::get('show/{menu}',[MenuController::class,'show']);
            Route::get('edit/{menu}',[MenuController::class,'edit']);
            Route::post('edit/{menu}',[MenuController::class,'update']);
            Route::delete('destroy',[MenuController::class,'destroy']);
            Route::post('changeStatus',[MenuController::class,'changeStatus']);
        });
        Route::prefix('products')->group(function (){
            Route::get('add',[ProductController::class,'create']);
            Route::post('add',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
            Route::get('edit/{product}',[ProductController::class,'edit']);
            Route::post('edit/{product}',[ProductController::class,'update']);
            Route::delete('destroy',[ProductController::class,'destroy']);
            Route::post('changeStatus',[ProductController::class,'changeStatus']);
        });
        //upload
        Route::post('upload/services', [UploadController::class, 'store']);
    });

});


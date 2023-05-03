<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\ModellController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/products');
})->name('products');

Route::get('/products', function () {
    return view('pages/products');
})->name('products');

Route::get('/product/{id}', function ($id) {
    return view('pages/product', [
        "id" => $id
    ]);
})->name('product');

Route::get('/designers', function () {
    return view('pages/designers');
})->name('designers');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('pages/dashboard');
    })->name('dashboard');




    
});


Route::get('/api/categories', [CategoryController::class, 'categories']);
Route::get('/api/categories/{id}', [CategoryController::class, 'category']);
Route::delete('/api/category/delete/{id}', [CategoryController::class, 'deleteCategory']);
Route::post('/api/category/new/{id}', [CategoryController::class, 'newCategory']);
Route::put('/api/category/update/{id}', [CategoryController::class, 'updateCategory']);
Route::get('/api/categories/{category}/modells', [KategoriaController::class, 'modells']);

Route::get('/api/designers', [DesignerController::class, 'designers']);
Route::get('/api/designers/{id}', [DesignerController::class, 'designer']);
Route::delete('/api/designer/delete/{id}', [DesignerController::class, 'deleteDesigner']);
Route::post('/api/designer/new/{id}', [DesignerController::class, 'newDesigner']);
Route::put('/api/designer/update/{id}', [DesignerController::class, 'updateDesigner']);

Route::get('/api/modells', [ModellController::class, 'modells']);
Route::get('/api/modells/{id}', [ModellController::class, 'modell']);
Route::delete('/api/modell/delete/{id}', [ModellController::class, 'deleteModell']);
Route::post('/api/modell/new/{id}', [ModellController::class, 'newModell']);
Route::put('/api/modell/update/{id}', [ModellController::class, 'updateModell']);

Route::get('/api/orders', [OrderController::class, 'orders']);
Route::get('/api/orders/{id}', [OrderController::class, 'order']);
Route::delete('/api/order/delete/{id}', [OrderController::class, 'deleteOrder']);
Route::post('/api/order/new/{id}', [OrderController::class, 'newOrder']);
Route::put('/api/order/update/{id}', [OrderController::class, 'updateOrder']);

Route::get('/api/orderItems', [OrderItemController::class, 'orderItems']);
Route::get('/api/orderItems/{id}', [OrderItemController::class, 'orderItem']);
Route::delete('/api/orderItem/delete/{id}', [OrderItemController::class, 'deleteOrderItem']);
Route::post('/api/orderItem/new/{id}', [OrderItemController::class, 'newOrderItem']);
Route::put('/api/orderItem/update/{id}', [OrderItemController::class, 'updateOrderItem']);

Route::get('/api/pictures', [PictureController::class, 'pictures']);
Route::get('/api/pictures/{id}', [PictureController::class, 'picture']);
Route::delete('/api/picture/delete/{id}', [PictureController::class, 'deletePicture']);
Route::post('/api/picture/new/{id}', [PictureController::class, 'newPicture']);
Route::put('/api/picture/update/{id}', [PictureController::class, 'updatePicture']);

Route::get('/api/products', [ProductController::class, 'products']);
Route::get('/api/products/{id}', [ProductController::class, 'product']);
Route::delete('/api/product/delete/{id}', [ProductController::class, 'deleteProduct']);
Route::post('/api/product/new/{id}', [ProductController::class, 'newProduct']);
Route::put('/api/product/update/{id}', [ProductController::class, 'updateProduct']);

Route::get('/api/users', [UserController::class, 'users']);
Route::get('/api/users/{id}', [UserController::class, 'user']);
Route::delete('/api/users/delete/{id}', [UserController::class, 'deleteUser']);
Route::post('/api/users/new/{id}', [UserController::class, 'newUser']);
Route::put('/api/users/update/{id}', [UserController::class, 'updateUser']);

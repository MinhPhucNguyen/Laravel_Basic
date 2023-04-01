<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);

// Route::get('/products', [
//     ProductsController::class,
//     'index'
// ]) -> name('products');

// Route::get('/products/{productName}/{id}', [
//     ProductsController::class,
//     'detail'
// ]) -> where([
//     'productName' => '[a-zA-Z0-9]+',
//     'id' => '[0-9]+'
// ]);

// Route::get('/', function () {
//     return view('home');
//     // return env('MY_NAME');
// });

// Route::get('/users', function () {
//     return 'This is the users pages';
// });

// Route::get('/foods', function () {
//     return ['sushi', 'sashimi', 'tofu'];
// });

// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'Nguyen Minh Phuc',
//         'email' => 'minhphuc.nguyen1609@gmail.com'
//     ]);
// });

// Route::get('/something', function () {
//     return redirect('/');
// });

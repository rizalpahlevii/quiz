<?php

use App\Http\Controllers\PrivateAPIController;
use App\Http\Controllers\PublicAPIController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);
Route::prefix('publics')->group(function () {
    Route::get('/products', [PublicAPIController::class, 'getProducts']);
    Route::get('/products-with-relations', [PublicAPIController::class, 'getProductsWithRelations']);
    Route::get('/products-with-sort-ordering', [PublicAPIController::class, 'getProductsWithSortOrdering']);
    Route::get('/products-group-by', [PublicAPIController::class, 'getProductsGroupBy']);
});

Route::prefix('privates')->middleware('jwt.verify')->group(function () {
    Route::get('/products', [PrivateAPIController::class, 'getProducts']);
    Route::get('/products-with-relations', [PrivateAPIController::class, 'getProductsWithRelations']);
    Route::get('/products-with-sort-ordering', [PrivateAPIController::class, 'getProductsWithSortOrdering']);
    Route::get('/products-group-by', [PrivateAPIController::class, 'getProductsGroupBy']);
});

<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProdukController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'auth:sanctum'], function () {
    //All secure URL's

    Route::get("list", [ProdukController::class, 'index']);

    Route::post("add", [ProdukController::class, 'store']);

    Route::delete('/destroy/{id}', [ProdukController::class, 'destroy']);

});


Route::post("login", [UserController::class, 'login']);

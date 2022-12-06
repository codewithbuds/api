<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Route::resource('user', UserController::class, 'index');

Route::post('/inventory',[StockController::class,'create']);

Route::get('/inventory', [StockController::class,'read']);

Route::get('/inventory/{id}', [StockController::class,'readbyId']);

Route::put('/inventoryupdate/{id}', [StockController::class,'updatebyId']);

Route::delete('/inventorydelete/{id}', [StockController::class,'deletebyId']);
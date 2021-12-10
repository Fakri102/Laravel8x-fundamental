<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', function () {
    // return [
    //     'message' => 'Hello, World'
    // ];

    return response()->json([
        'message' => 'Hello, world'
    ], 201);
});

Route::get('/debug', function () {
    // dd([
    //     'message' => 'hello, world'
    // ]);
    ddd([
        'message' => 'hello, world'
    ]);
});


Route::get('task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::get('/task/{id}', [TaskController::class, 'show']);
Route::post('/task', [TaskController::class, 'store']);
Route::get('/task/{id}/edit', [TaskController::class, 'edit']);
Route::patch('task/{id}', [TaskController::class, 'update']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);
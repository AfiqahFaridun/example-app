<?php

use App\Http\Controllers\TodoController;
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

/*Route::get('/', function () {
    return view('fiqa', [
        'name' => 'Afiqah',
        'gender' => 'Female',
        'hoby' => 'coding',
    ]);
});*/

Route::get('/', [TodoController::class, 'index']);
Route::get('/view', [TodoController::class, 'view']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/edit', [TodoController::class, 'edit']);

<?php

use App\Http\Controllers\C_todo;
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
    return view('welcome');
});

Route::get('/Todo_lis', [C_todo::class, 'index']);
Route::get('/delete_todo/{td_id}', [C_todo::class, 'delete']);
Route::get('/edit_todo/{td_id}', [C_todo::class, 'edit']);

Route::post('update_todo/{td_id}',[C_todo::class,'update']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('list', [ListController::class, 'show']);
Route::get('show_list', [ListController::class, 'show_list']);
Route::get('getAPI_code', [ListController::class, 'getAPI_code']);

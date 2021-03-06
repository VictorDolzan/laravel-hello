<?php

use App\Http\Controllers\ActController;
use App\Http\Controllers\HelloController;
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

Route::get('/', [ActController::class, 'indexAct']);

Route::get('/act', [ActController::class, 'indexInstituto']);
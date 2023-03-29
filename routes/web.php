<?php

use Illuminate\Support\Facades\Route;

// importo il controller (namespace controller + nome Controller)
use App\Http\Controllers\PageController;

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

// collego la route al controller con [nomeController::class, nome funzione nel controller]
Route::get('/', [PageController::class, 'listPage'])->name("list");
Route::get('/detail_page/{id}', [PageController::class, 'movieDetail'])->name("detail_page");
<?php
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;



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

// Route::get('/', function () {
//     return view('index');
// });
Route::get("/", [NewsController::class,"index"]);
Route::get('/details/{id}',[NewsController::class,'details']);
Route::get('/cat/{id}',[NewsController::class,'category']);
// Route::get('/search/{obj}',[NewsController::class,'search']);
Route::get('/search',[NewsController::class,'search'])->name('search.index');
// Route::get('/result',[NewsController::class,'search'])->name('search.result');

// Route::get('/search', [SearchController::class, 'index'])->name('search.index');
// Route::post('/search', [SearchController::class, 'search'])->name('search.results');


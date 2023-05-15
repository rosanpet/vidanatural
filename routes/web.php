<?php

use App\Http\Controllers\AsociadosController;
use Illuminate\Support\Facades\Http;
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
/*  */


Route::get("/", [AsociadosController::class, 'create'])->name('create');
Route::post("/", [AsociadosController::class, 'store'])->name('store');

/* Route::get('/asociados', function () {
    return view('registro-asociados');
}); */

/* Route::get('/', function () {
    $response = Http::get('https://vidanaturalargentina.com/api');
    dd($response);
}); */

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 */
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotfolioController;

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

Route::get('/portfolio', [PotfolioController::class, 'home'])->name('portfolio.home');
Route::get('/portfolio-detail', [PotfolioController::class, 'potfolio'])->name('portfolio');
Route::get('/coffee', [PotfolioController::class, 'coffee'])->name('coffee');
Route::get('/Flappy-Bird', [PotfolioController::class, 'bird'])->name('bird');
Route::get('/3D-Box', [PotfolioController::class, 'box'])->name('box');


Route::get('/custom-web-development', [PotfolioController::class, 'development'])->name('development');
Route::get('/Frontend-Development', [PotfolioController::class, 'frontend'])->name('frontend');
Route::get('/Backend-Development', [PotfolioController::class, 'backend'])->name('backend');
Route::get('/Version-Control', [PotfolioController::class, 'version'])->name('version');
Route::get('/Full-Stack-Solution', [PotfolioController::class, 'solution'])->name('solution');
Route::get('/Maintenance&Support', [PotfolioController::class, 'suppot'])->name('support');







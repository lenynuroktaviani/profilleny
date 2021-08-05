<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilsController;
use App\Http\Controllers\KontaksController;
use App\Http\Controllers\HistorysController;
use App\Http\Controllers\PengalamansController;

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
Route::get('', [HomeController::class, 'index']);
Route::resources([
    'Home' => HomeController::class,
    'profils' => ProfilsController::class,
    'kontaks' => KontaksController::class,
    'historys' => HistorysController::class,
    'pengalamans' => PengalamansController::class,


]);

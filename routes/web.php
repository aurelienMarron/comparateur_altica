<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaisieController;
use App\Http\Controllers\ResultatController;

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
Route::get('/', [SaisieController::class, 'create']) -> name ('home');

Route::view('comparateur', 'pages/comparateur') -> name ('comparateur');

Route::view('confirmation', 'pages/confirmation');

// Route::get('/', fn() => view('pages/home')) -> name ('home');

/*
Route::get('/', function () {
    return view('pages/home');
}) -> name('home');
*/

Route::get('saisie', [SaisieController::class, 'create']);

Route::post('saisie', [SaisieController::class, 'store']) -> name ('validation');

Route::get('resultat', [ResultatController::class, 'custom']);

Route::post('resultat', [ResultatController::class, 'store']) -> name ('validationResultat');

Route::post('inscription',[ResultatController::class, 'addContact'])->name('inscriptionContact');

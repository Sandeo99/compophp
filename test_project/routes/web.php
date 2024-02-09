<?php

use App\Http\Controllers\ContactController;
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

Route:: get('/connexion', [ContactController::class, 'connexion']);
Route:: get('/inscription', [ContactController::class, 'inscription']);
Route:: get('/ajout', [ContactController::class, 'ajout']);
Route:: get('/modify', [ContactController::class, 'modify']);
Route:: get('/contactlist', [ContactController::class, 'contactlist']);

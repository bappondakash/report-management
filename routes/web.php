<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Acland\AclandController;
use App\Http\Controllers\Basic\UserController;


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

Route::get('/dashboard/login', [UserController::class, 'login'])->name('user.login');

// all link for acland dashboard
Route::prefix('acland')->name('acland.')->middleware('acland')->group(function() {
    Route::get('/dashboard', [AclandController::class, 'index']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

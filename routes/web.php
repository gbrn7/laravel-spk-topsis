<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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



Route::get('/signin', [AuthController::class, 'index'])->name('signin');
Route::post('/signin', [AuthController::class, 'authenticate'])->name('signin.auth');

Route::group(['prefix' => 'topsis', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('logout', [AuthController::class, 'logout'])->name('signin.logout');
});

Route::any('/{any}', function () {

    if(auth()->user()){
        return redirect()->route('dashboard');
    }
    return redirect()->route('signin');
})->where('any', '.*');

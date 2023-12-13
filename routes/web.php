<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CriteriaController;

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

    Route::prefix('criteria')->group(function () {
        Route::get('/', [CriteriaController::class, 'index'])->name('criteria');   
        Route::post('/store', [CriteriaController::class, 'store'])->name('criteria.store');   
        Route::put('/update', [CriteriaController::class, 'update'])->name('criteria.update');   
        Route::delete('/destroy', [CriteriaController::class, 'delete'])->name('criteria.destroy');   
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('signin.logout');
});



Route::any('/{any}', function () {

    if(auth()->user()){
        return redirect()->route('dashboard');
    }
    return redirect()->route('signin');
})->where('any', '.*');

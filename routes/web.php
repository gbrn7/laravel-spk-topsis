<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CalculationsController;
use App\Http\Controllers\ResultController;

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



Route::get('/signIn', [AuthController::class, 'index'])->name('signIn');
Route::post('/signIn', [AuthController::class, 'authenticate'])->name('signin.auth');

Route::get('/signUp', [SignUpController::class, 'index'])->name('signUp');
Route::post('/signUp', [SignUpController::class, 'store'])->name('signUp.store');

Route::group(['prefix' => 'topsis', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    
    Route::prefix('criteria')->group(function () {
        Route::get('/', [CriteriaController::class, 'index'])->name('criteria');   
        Route::post('/store', [CriteriaController::class, 'store'])->name('criteria.store');   
        Route::put('/update', [CriteriaController::class, 'update'])->name('criteria.update');   
        Route::delete('/destroy', [CriteriaController::class, 'delete'])->name('criteria.destroy');   
        Route::get('/export/excel', [CriteriaController::class, 'exportExcel'])->name('criteria.export.excel');   
        Route::get('/template', [CriteriaController::class, 'getCriteriaTemplate'])->name('template.criteria');
        Route::post('/template', [CriteriaController::class, 'importCriteria'])->name('template.criteria.import');
    });

    Route::prefix('alternatives')->group(function () {
        Route::get('/', [AlternativeController::class, 'index'])->name('alternatives');   
        Route::post('/store', [AlternativeController::class, 'store'])->name('alternative.store');   
        Route::put('/update', [AlternativeController::class, 'update'])->name('alternative.update');   
        Route::delete('/destroy', [AlternativeController::class, 'delete'])->name('alternative.destroy');   
    });

    Route::prefix('grades')->group(function () {
        Route::get('/', [GradeController::class, 'index'])->name('grades');   
        Route::get('/getForms', [GradeController::class, 'getForms'])->name('grades.getForms');   
        Route::put('/update', [GradeController::class, 'update'])->name('grades.update');   
    });

        Route::get('/calculations', [CalculationsController::class, 'index'])->name('calculations');    

        Route::get('/results', [ResultController::class, 'index'])->name('results');    

    Route::get('logout', [AuthController::class, 'logout'])->name('signin.logout');
});



Route::any('/{any}', function () {

    if(auth()->user()){
        return redirect()->route('dashboard');
    }
    return redirect()->route('signIn');
})->where('any', '.*');

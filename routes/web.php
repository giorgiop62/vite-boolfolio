<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[PageController::class, 'index'])->name('home');

Route::middleware(['auth','verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/',[DashboardController::class, 'index'])->name('home');
        Route::resource('posts', PostController::class);
    });

    //si mette alla fine per gestire tutte le route che non appartengono a laravel
    Route::get('{any?}',function(){
        return view('guest.home');
    })->where('any', '.*')->name('home');



require __DIR__.'/auth.php';

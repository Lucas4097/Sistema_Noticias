<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'dashboardPage'])->name('dashboardPage');
    Route::get('/criar', [DashboardController::class, 'dashboardCreatePage'])->name('dashboardCreatePage');
    Route::get('/editar', [DashboardController::class, 'dashboardEditPage'])->name('dashboardEditPage');
    Route::delete('/excluir', [DashboardController::class, 'dashboardDelete'])->name('dashboardDelete');
    Route::post('criar', [DashboardController::class, 'dashboardCreate'])->name('dashboardCreate');
});

Route::get('/home', [HomeController::class, 'homePage'])->name('homePage');


require __DIR__.'/auth.php';

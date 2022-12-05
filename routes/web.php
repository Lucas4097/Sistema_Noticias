<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\NoticeController;
use App\Http\Controllers\User\ProfileController;
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
    return redirect()->route('homePage');
});

Route::middleware('admin')->prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'dashboardPage'])->name('dashboardPage');
    Route::get('/criar', [DashboardController::class, 'dashboardCreatePage'])->name('dashboardCreatePage');
    Route::get('/editar', [DashboardController::class, 'dashboardEditPage'])->name('dashboardEditPage');
    Route::delete('/excluir', [DashboardController::class, 'dashboardDelete'])->name('dashboardDelete');
    Route::post('criar', [DashboardController::class, 'dashboardCreate'])->name('dashboardCreate');
    Route::post('editar', [DashboardController::class, 'dashboardEdit'])->name('dashboardEdit');

});

Route::middleware('auth')->group(function () {
    Route::get('/usuario', [ProfileController::class, 'user'])->name('user');
    Route::post('/usuario/editar', [ProfileController::class, 'edit'])->name('userEdit');
    Route::post('comentar', [NoticeController::class, 'commentStore'])->name('commentStore');
});

Route::get('/home', [HomeController::class, 'homePage'])->name('homePage');
Route::get('/buscas/{category?}', [NoticeController::class, 'searchPage'])->name('searchPage');
Route::get('/noticia', [NoticeController::class, 'noticePage'])->name('noticePage');


require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::post('/auto-deploy', function () {
    chdir('/var/www');

    $pullOutput = shell_exec('git pull');
    echo "<pre>$pullOutput</pre>";

    $status = shell_exec('git status');
    echo "<pre>$status</pre>";
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'attemptLogin'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/attendees', [DashboardController::class, 'attendees'])->name('attendees');
    Route::get('/register-user', [DashboardController::class, 'createUser'])->name('user-create');
    Route::post('/store-user', [DashboardController::class, 'storeUser'])->name('user-store');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});


<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Cliente;
use App\Models\User;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'clientes' => Cliente::all(),
        'users' => User::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Users
    Route::get('/users-index', [UserController::class, 'index'])->name('user.index');
    Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/edit-update/{id}', [UserController::class, 'update'])->name('user.update');

    // Clientes
    Route::resources([
        'cliente' => ClienteController::class
    ]);

    // Meus clientes
    Route::get('/meus-clientes/{id}', [ClienteController::class, 'meus_clientes'])->name('meus.clientes');
    Route::get('/confirma-delete/{id}', [ClienteController::class, 'confirma_delete'])->name('confirma.delete');
});

require __DIR__.'/auth.php';

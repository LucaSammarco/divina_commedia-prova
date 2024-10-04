<?php

use App\Http\Controllers\Guests\GuestController;  // Importa il controller guest
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController as AuthenticatedHomeController;
use Illuminate\Support\Facades\Route;

// // Home page pubblica per i guest
// Route::get('/', [GuestController::class, 'index'])->name('guest.home');

// Home page pubblica FRONTEND
Route::get('/', function () {
    return view('FrontEnd.index'); // Carica il file Blade 'resources/views/FrontEnd/index.blade.php'
});



// Rotta per mostrare i canti di una cantica specifica
// Route::get('/cantica/{canticaId}', [GuestController::class, 'showCantica'])->name('guest.cantica');

// Rotta per mostrare i versi di un canto specifico
// Route::get('/cantica/{canticaId}/canto/{cantoId}', [GuestController::class, 'showCanto'])->name('guest.canto');

// Rotte per l'autenticazione (login, registrazione, ecc.)
Auth::routes();

// Home page per gli utenti autenticati
// Route::get('/home', [AuthenticatedHomeController::class, 'index'])->name('home');

// Rotte per l'area Admin (protette da middleware 'auth')
Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function () {
    Route::get('home', [AdminHomeController::class, 'index'])->name('home');
});


// Rotta di fallback - reindirizza tutte le rotte non definite alla home page guest
Route::fallback(function () {
    return redirect()->route('guest.home');
});
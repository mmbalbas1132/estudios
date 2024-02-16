<?php

use App\Livewire\AsignaturaAssing;
use App\Livewire\AsignaturaCreate;
use App\Livewire\AsignaturaEdit;
use App\Livewire\AsignaturaDelete; // Asegúrate de importar la clase AsignaturaDelete
use App\Livewire\AsignaturasIndex;
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

// Protege las rutas que requieren autenticación
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Prefijo para todas las rutas relacionadas con 'asignaturas'
    Route::prefix('asignaturas')->group(function () {
        Route::get('/', AsignaturasIndex::class)->name('asignaturas.index');
        Route::get('/create', AsignaturaCreate::class)->name('asignaturas.create');
        Route::get('/{asignatura}/edit', AsignaturaEdit::class)->name('asignaturas.edit');
        Route::get('/{asignatura}/delete', AsignaturaDelete::class)->name('asignaturas.delete'); // Añade esta línea
        Route::get('/{asignatura}/assign', AsignaturaAssing::class)->name('asignaturas.assign');
    });
});

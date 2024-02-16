<?php

use App\Livewire\AsignaturaAssing;
use App\Livewire\AsignaturaCreate;
use App\Livewire\AsignaturaEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\AsignaturasIndex;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('asignaturas')->group(function () {
    Route::get('/', AsignaturasIndex::class)->name('asignaturas.index');
    Route::get('/create', AsignaturaCreate::class)->name('asignaturas.create');
    Route::get('/{asignatura}/edit', AsignaturaEdit::class)->name('asignaturas.edit');
    Route::get('/{asignatura}/delete', AsignaturaEdit::class)->name('asignaturas.delete');
    Route::get('/{asignatura}/assign', AsignaturaAssing::class)->name('asignaturas.assign');
});





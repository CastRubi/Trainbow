<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/agenda', function () {
    return Inertia::render('Agenda');
})->middleware(['auth', 'verified'])->name('agenda');

Route::get('/servicios', function () {
    return Inertia::render('Servicios');
})->middleware(['auth', 'verified'])->name('servicios');
 
Route::get('/soporte', function () {
    return Inertia::render('Soporte');
})->middleware(['auth', 'verified'])->name('soporte');


// Route::group(['middleware'=>['auth']], function(){
    
//     Route::resource('agendas',AgendasController::class);
//     Route::resource('servicio',ServicioController::class);
//     Route::resource('soporte',SoporteController::class);
    
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

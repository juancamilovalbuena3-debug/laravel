<?php

<<<<<<< HEAD

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/empleados', function () {
    $empleados = DB::table('empleados')->get();
    return view('empleados', compact('empleados'));
});
=======
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> bea4d40d935c6c931ab5d9da09bd5336c3458aae

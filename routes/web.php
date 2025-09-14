<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/empleados', function () {
    $empleados = DB::table('empleados')->get();
    return view('empleados', compact('empleados'));
});

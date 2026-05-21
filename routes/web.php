<?php
use App\Http\Controllers\SucursalController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('sucursals.index');
});
Route::resource('sucursals',SucursalController::class);

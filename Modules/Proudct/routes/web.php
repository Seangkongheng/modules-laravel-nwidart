<?php

use Illuminate\Support\Facades\Route;
use Modules\Proudct\App\Http\Controllers\ProudctController;

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

Route::group([], function () {
    Route::resource('proudct', ProudctController::class)->names('proudct');

    Route::view('test','proudct::testing');
});

<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('imagenes/solicitudes/{order}/{filename}',
    [\App\Http\Controllers\ImagesController::class, 'orderFiles']
)->name('images.orderFiles.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->prefix('usuarios')->group(function () {
    Route::get('/', function () { return view('users.show'); })->name('users.list');
    Route::get('/importmasivo', function () { return view('users.masiveimport'); })->name('users.massiveimport');
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('fotos')->group(function () {
    Route::get('/', function () { return view('techgo.index'); })->name('photo.list');
    Route::get('/nuevas', function () { return view('techgo.photos'); })->name('photo.add');
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('soporte-tecnico')->group(function () {
    Route::get('/', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index'])->name('warranty.index');
    Route::get('/add', [\App\Http\Controllers\Frontend\WarrantyController::class, 'addeditwarranty'])->name('warranty.add.get');
    Route::post('/add', [\App\Http\Controllers\Backend\WarrantyController::class, 'addwarranty'])->name('warranty.add.post');
    Route::get('/{warranty:name}', [\App\Http\Controllers\Frontend\WarrantyController::class, 'warrantydetail'])->name('warranty.details');

});


Route::namespace('Frontend')->group(function () {
    Route::prefix('garantias')->group(function () {

        Route::get('/samsung', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/nokia', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/hyundai', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/lg', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/motorola', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/apple', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/brother', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/asus', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/exo', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/nintendo', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/roku', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/turtlebeach', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/thrustmaster', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/commodore', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/datsun', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/blu', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/next', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/fitpower', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/audiologic', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/coventry', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/outlet', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/twg', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
        Route::get('/test', [\App\Http\Controllers\Frontend\WarrantyController::class, 'index']);
    });
});

Route::get('/offline', function () {
    return view('vendor/laravelpwa/offline');
});
//Route::redirect('/', './garantias');

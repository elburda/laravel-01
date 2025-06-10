<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicNovedadesController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\InventarioController;


// Rutas públicas
Route::get('/listado/planes-servicios', [PublicController::class, 'index'])
->name('planes-servicios');

Route::get('/planes/{id}', [PublicController::class, 'show'])
->name('public.show');


Route::get('/',
[\App\Http\Controllers\HomeController::class, 'home'])
->name('home');

Route::get('/acerca-de',
[\App\Http\Controllers\HomeController::class, 'acerca'])
->name('acerca');

/**Login */
Route::get('/ingresar',
[\App\Http\Controllers\AuthController::class, 'loginForm'])
->name('auth.loginForm');

Route::post('/ingresar',
[\App\Http\Controllers\AuthController::class, 'loginExecute'])
->name('auth.loginExecute');

Route::post('/cerrar-sesion',
[\App\Http\Controllers\AuthController::class, 'logout'])
->name('auth.logout');
/**Fin */

/**Planes */
//Rutas de administración de Planes
Route::middleware('auth')->group(function () {
    Route::get('/abm/planes-servicios', [InventarioController::class, 'index'])
    ->name('abm.planes.servicios');
    Route::get('/inventario/agregar', [InventarioController::class, 'create'])
    ->name('inventario.crear');
    Route::post('/inventario/agregar', [InventarioController::class, 'store'])
    ->name('inventario.store');
    Route::get('/inventario/{id}/eliminar', [InventarioController::class, 'delete'])
    ->name('inventario.delete');
    Route::post('/inventario/{id}/eliminar', [InventarioController::class, 'destroy'])
    ->name('inventario.destroy');
    Route::get('/inventario/{id}/editar', [InventarioController::class, 'edit'])
    ->name('inventario.edit');
    Route::post('/inventario/{id}/editar', [InventarioController::class, 'update'])
    ->name('inventario.update');
    Route::get('/inventario/{id}', [InventarioController::class, 'show'])
    ->name('inventario.ver');
});


/***Novedades */
// Rutas para usuarios normales
Route::get('/novedades', [PublicNovedadesController::class, 'index'])
->name('novedades.index');
Route::get('/novedades/{id}', [PublicNovedadesController::class, 'show'])
->name('novedades.ver');


// Rutas de administración de novedades
Route::middleware('auth')->group(function () {
    Route::get('/abm/novedades', [NovedadesController::class, 'index'])
    ->name('abm.novedades');
    Route::get('/abm/novedades/{id}', [NovedadesController::class, 'show'])
    ->name('abm.novedades.ver');
    Route::get('/novedades/agregar', [NovedadesController::class, 'create'])
    ->name('novedades.crear');
    Route::post('/novedades/agregar', [NovedadesController::class, 'store'])
    ->name('novedades.store');
    Route::get('/novedades/{id}/editar', [NovedadesController::class, 'edit'])
    ->name('novedades.edit');
    Route::post('/novedades/{id}/editar', [NovedadesController::class, 'update'])
    ->name('novedades.update');
    Route::get('/novedades/{id}/eliminar', [NovedadesController::class, 'delete'])
    ->name('novedades.delete');
    Route::post('/novedades/{id}/eliminar', [NovedadesController::class, 'destroy'])
    ->name('novedades.destroy');
});
/**Fin */



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicNovedadesController;
use App\Http\Controllers\NovedadesController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
// use App\Http\Middleware\VisitanteMiddleware; -> Preguntar al profe porque no me reconoce el middleware

// Rutas públicas
Route::get('/listado/planes-servicios',  [PublicController::class, 'index'])
->name('planes-servicios');
Route::get('/planes/{id}',               [PublicController::class, 'show'])
->name('public.show');

//  Rutas Visitantes
Route::middleware([\App\Http\Middleware\VisitanteMiddleware::class])->group(function () {
    Route::get('/novedades/novedades-lista', [PublicNovedadesController::class, 'index'])
    ->name('novedades.lista');
    Route::get('/novedades-publico/{id}', [PublicNovedadesController::class, 'show'])
    ->name('public.novedades.ver');
});

// Rutas accesibles para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    Route::get('/novedades', [NovedadesController::class, 'index'])
    ->name('novedades.index');
    // Route::get('/novedades/{id}', [NovedadesController::class, 'show'])->where('id', '[0-9]+')->name('novedades.ver');
});

// Página principal
Route::get('/',          [\App\Http\Controllers\HomeController::class, 'home'])
->name('home');
Route::get('/acerca-de', [\App\Http\Controllers\HomeController::class, 'acerca'])
->name('acerca');

/** Login */
Route::get('/ingresar',       [\App\Http\Controllers\AuthController::class, 'loginForm'])
->name('auth.loginForm');
Route::post('/ingresar',      [\App\Http\Controllers\AuthController::class, 'loginExecute'])
->name('auth.loginExecute');
Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
->name('auth.logout');
/** Fin */

/** Planes */
// Rutas de administración de Planes
Route::middleware('auth')->group(function () {
    Route::get('/abm/planes-servicios',   [InventarioController::class, 'index'])
    ->name('abm.planes.servicios');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios/agregar', [UserController::class, 'create'])
    ->name('users.crear');
    Route::get('/users',         [UserController::class, 'index'])
    ->name('users.index');
    Route::get('/usuarios/{user}', [UserController::class, 'show'])
    ->name('users.ver');
    Route::get('/abm/novedades', [NovedadesController::class, 'index'])
    ->name('abm.novedades');
    Route::get('/listados',      [InventarioController::class, 'index'])
    ->name('listados.index');
    Route::get('/inventario/agregar', [InventarioController::class, 'create'])
    ->name('inventario.crear');


    Route::middleware([AdminMiddleware::class])->group(function () { 
        
        // Rutas de Inventario 
        Route::get('/inventario/{id}',           [InventarioController::class, 'show'])
        ->name('inventario.ver');

        // Route::get('/inventario/agregar',        [InventarioController::class, 'create'])
        // ->name('inventario.crear'); -> Preguntar porque no funciona esta ruta aca
        
        Route::post('/inventario/agregar',       [InventarioController::class, 'store'])
        ->name('inventario.store');
        Route::get('/inventario/{id}/editar',    [InventarioController::class, 'edit'])
        ->name('inventario.edit');
        Route::post('/inventario/{id}/editar',   [InventarioController::class, 'update'])
        ->name('inventario.update');
        Route::get('/inventario/{id}/eliminar',  [InventarioController::class, 'delete'])
        ->name('inventario.delete');
        Route::post('/inventario/{id}/eliminar', [InventarioController::class, 'destroy'])
        ->name('inventario.destroy');
        
        // Rutas de ABM Novedades

        Route::get('/novedades/{id}',               [NovedadesController::class, 'show'])
        ->name('novedades.ver');
        Route::get('/abm/novedades/agregar',        [NovedadesController::class, 'create'])
        ->name('abm.novedades.crear');
        Route::post('/abm/novedades/agregar',       [NovedadesController::class, 'store'])
        ->name('abm.novedades.store');
        Route::get('/abm/novedades/{id}/editar',    [NovedadesController::class, 'edit'])
        ->name('abm.novedades.edit');
        Route::post('/abm/novedades/{id}/editar',   [NovedadesController::class, 'update'])
        ->name('abm.novedades.update');
        Route::get('/abm/novedades/{id}/eliminar',  [NovedadesController::class, 'delete'])
        ->name('abm.novedades.delete');
        Route::post('/abm/novedades/{id}/eliminar', [NovedadesController::class, 'destroy'])
        ->name('abm.novedades.destroy');

        // Rutas de Usuarios 

        // Route::get('/usuarios/agregar',         [UserController::class, 'create'])
        // ->name('users.crear'); -> porque tengo que sacarlo del AdminMiddleware
        
        Route::post('/usuarios/agregar',        [UserController::class, 'store'])
        ->name('users.store');
        Route::get('/usuarios/{user}/editar',   [UserController::class, 'edit'])
        ->name('users.edit');
        Route::post('/usuarios/{user}/editar',  [UserController::class, 'update'])
        ->name('users.update');
        Route::get('/usuarios/{user}/eliminar', [UserController::class, 'delete'])
        ->name('users.delete');
        Route::delete('/usuarios/{user}',       [UserController::class, 'destroy'])
        ->name('users.destroy');
    
    });
});




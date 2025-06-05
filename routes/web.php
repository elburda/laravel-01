<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\NovedadController;

// Rutas públicas
Route::get('/listado/planes-servicios', [PublicController::class, 'index'])
->name('planes-servicios');

Route::get('/planes/{id}', [PublicController::class, 'show'])
->name('public.show');


Route::get('/novedades/{novedad}', [NovedadController::class, 'show'])
    ->name('novedades.show');




Route::get('/',
[\App\Http\Controllers\HomeController::class, 'home'])
->name('home');

Route::get('/acerca-de',
[\App\Http\Controllers\HomeController::class, 'acerca'])
->name('acerca');




Route::get('/ingresar',
[\App\Http\Controllers\AuthController::class, 'loginForm'])
->name('auth.loginForm');

Route::post('/ingresar',
[\App\Http\Controllers\AuthController::class, 'loginExecute'])
->name('auth.loginExecute');

Route::post('/cerrar-sesion',
[\App\Http\Controllers\AuthController::class, 'logout'])
->name('auth.logout');




Route::get('/abm/planes-servicios',
[\App\Http\Controllers\InventarioController::class, 'index'])
->name('abm.planes.servicios')
->middleware('auth');

Route::get('/inventario/agregar',
[\App\Http\Controllers\InventarioController::class, 'create'])
->name('inventario.crear')
->middleware('auth');

Route::post('/inventario/agregar',
[\App\Http\Controllers\InventarioController::class, 'store'])
->name('inventario.store')
->middleware('auth');

Route::get('/inventario/{id}/eliminar',
[\App\Http\Controllers\InventarioController::class, 'delete'])
->name('inventario.delete')
->middleware('auth');

Route::post('/inventario/{id}/eliminar',
[\App\Http\Controllers\InventarioController::class, 'destroy'])
->name('inventario.destroy')
->middleware('auth');

Route::get('/inventario/{id}/editar',
[\App\Http\Controllers\InventarioController::class, 'edit'])
->name('inventario.edit')
->middleware('auth');

Route::post('/inventario/{id}/editar',
[\App\Http\Controllers\InventarioController::class, 'update'])
->name('inventario.update')
->middleware('auth');

Route::get('/inventario/{id}',
[\App\Http\Controllers\InventarioController::class, 'show'])
->name('inventario.ver');

/************NOVEDADES**********/


Route::get('/admin/novedades', [\App\Http\Controllers\Admin\NovedadController::class, 'index'])
    ->name('admin.novedades.index')
    ->middleware('auth');


Route::get('/admin/novedades/create', [\App\Http\Controllers\Admin\NovedadController::class, 'create'])
    ->name('admin.novedades.create')
    ->middleware('auth');


Route::post('/admin/novedades', [\App\Http\Controllers\Admin\NovedadController::class, 'store'])
    ->name('admin.novedades.store')
    ->middleware('auth');


Route::get('/admin/novedades/{novedad}/edit', [\App\Http\Controllers\Admin\NovedadController::class, 'edit'])
    ->name('admin.novedades.edit')
    ->middleware('auth');


Route::put('/admin/novedades/{novedad}', [\App\Http\Controllers\Admin\NovedadController::class, 'update'])
    ->name('admin.novedades.update')
    ->middleware('auth');


Route::delete('/admin/novedades/{novedad}', [\App\Http\Controllers\Admin\NovedadController::class, 'destroy'])
    ->name('admin.novedades.destroy')
    ->middleware('auth');


Route::get('/admin/novedades/{novedad}', [\App\Http\Controllers\Admin\NovedadController::class, 'show'])
    ->name('admin.novedades.show')
    ->middleware('auth');


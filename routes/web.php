<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresas', [EmpresasController::class, 'index']);

Route::get('/empresas/editar/{id}', [EmpresasController::class, 'actualizar'])->name('empresa.actualizar');

Route::get('/empresas/registro', [EmpresasController::class, 'nuevo']);

Route::get('/empresas/borrar/{id}', [EmpresasController::class, 'borrar']);

Route::post('/empresas/guardar', [EmpresasController::class, 'guardar_nuevo'])->name('guardar_nuevo');

Route::post('empresas/actualizar/{id}', [EmpresasController::class, 'guardar_actualizar']);


// ESTUDIANTES 

use App\Http\Controllers\EstudiantesController;

Route::get('/estudiantes', [EstudiantesController::class, 'index']);

Route::get('/estudiantes/editar/{id}', [EstudiantesController::class, 'actualizar'])->name('estudiantes.actualizar');

Route::get('/estudiantes/registro', [EstudiantesController::class, 'nuevo']);

Route::get('/estudiantes/borrar/{id}', [EstudiantesController::class, 'borrar']);

Route::post('/estudiantes/guardar', [EstudiantesController::class, 'guardar_nuevo'])->name('guardar_nuevo');

Route::post('estudiantes/actualizar/{id}', [EstudiantesController::class, 'guardar_actualizar']);


//TUTORES 

use App\Http\Controllers\TutoresController;

Route::get('/tutores', [TutoresController::class, 'index']);

Route::get('/tutores/editar/{id}', [TutoresController::class, 'actualizar'])->name('tutores.actualizar');

Route::get('/tutores/registro', [TutoresController::class, 'nuevo']);

Route::get('/tutores/borrar/{id}', [TutoresController::class, 'borrar']);

Route::post('/tutores/guardar', [TutoresController::class, 'guardar_nuevo'])->name('guardar_nuevo');

Route::post('tutores/actualizar/{id}', [TutoresController::class, 'guardar_actualizar']);



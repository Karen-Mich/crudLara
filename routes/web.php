<?php
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiantes', [EstudianteController::class,'index']);
Route::post('/estudiantes', [EstudianteController::class,'store']);
Route::get('/estudiantes/create', [EstudianteController::class,'create']);
Route::delete('/estudiantes/{id}', [EstudianteController::class,'destroy']);
Route::get('/estudiantes/{id}/edit', [EstudianteController::class,'edit']);
Route::put('/estudiantes/{id}', [EstudianteController::class,'update']);


?>
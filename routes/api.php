<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EstudianteController;

Route::get('/user', [EstudianteController::class,"index"]);
Route::post('/user', [EstudianteController::class,"store"]);
Route::delete('/user/{id}', [EstudianteController::class,'destroy']);
Route::get('/users/{id}', [EstudianteController::class, 'show']); // Mostrar un usuario específico
Route::put('/users/{id}', [EstudianteController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
?>
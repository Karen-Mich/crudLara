<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EstudianteController extends Controller
{
   protected static $url = "http://localhost/Quinto/Controllers/apiEstudiantes.php";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Http::GET(static::$url);
        $estudiantesArray = $estudiantes->json();
        return view('estudiante.mostrar', compact('estudiantesArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::AsForm()->post(static::$url,[
            'cedula' => $request -> input('cedula'),
            'nombre' => $request -> input('nombre'),
            'apellido' => $request -> input('apellido'),
            'direccion' => $request -> input('direccion'),
            'telefono' => $request -> input('telefono'),
        ]);
        return redirect('/estudiantes');








    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $response = Http::get(static::$url);
    $estudiantes = $response->json();
    $estudiante = collect($estudiantes)->firstWhere('cedula', $id); // obtener el estudiante con la cédula correspondiente
    return view('estudiante.editar', compact('estudiante'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cedula)
    {
        $url = static::$url . "?cedula=$cedula";
        $url .= "&nombre=" . urlencode($request->input('nombre'));
        $url .= "&apellido=" . urlencode($request->input('apellido'));
        $url .= "&direccion=" . urlencode($request->input('direccion'));
        $url .= "&telefono=" . urlencode($request->input('telefono'));
    
        $response = Http::put($url);
    
        if ($response->successful()) {
            return redirect('/estudiantes');
        } else {
            die('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cedula)
    {
        $response = Http::delete(static::$url."?cedula=".$cedula);
        return redirect('/estudiantes');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = Sala::all(); // Recuperar todas las salas de la base de datos
        return view('salas.index', compact('salas')); // Pasar las salas a la vista
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salas.create'); // Vista con el formulario para crear una nueva sala
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agendas = new Sala;
        $agendas->nombre = $request->input('nombre');
        $agendas->capacidad = $request->input('capacidad');
        $agendas->proyector = $request->input('proyector');
        // para guardarlo en la base de datos
        $agendas->save();
        // para volver a la pagina anterior 
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Sala $sala)
    {
        return view('salas.show', compact('sala')); // Mostrar una sala específica
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
    {
        return view('salas.edit', compact('sala')); // Mostrar el formulario de edición
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $sala)
{
    $sala->nombre = $request->input('nombre');
    $sala->capacidad = $request->input('capacidad');
    $sala->proyector = $request->input('proyector');
    $sala->save(); // Guardar los cambios en la base de datos

    return redirect()->route('salas.index'); // Redirigir al listado de salas
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sala $sala)
    {
        $sala->delete(); // Eliminar la sala
        return redirect()->route('salas.index'); // Redirigir al listado de salas
    }
    
}

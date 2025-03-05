<?php

namespace App\Http\Controllers;

use App\Models\Reunion;
use App\Models\Sala;
use App\Models\Agenda;
use Illuminate\Http\Request;

class ReunionesController extends Controller
{
    public function index()
    {
        // Obtener todas las reuniones con las relaciones
        $reuniones = Reunion::with(['agenda', 'sala'])->get();

        $agendas = Agenda::all();
        $salas = Sala::all();

        return view('reuniones.index', compact('reuniones', 'agendas', 'salas'));
    }
      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener todas las agendas y salas disponibles
        $agendas = Agenda::all();
        $salas = Sala::all();
        
        // Retornar la vista de crear una reunión
        return view('reuniones.create', compact('agendas', 'salas'));
    }
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reunion = new Reunion;
        $reunion->agendas_id = $request->input('agendas_id');
        $reunion->salas_id = $request->input('salas_id');
        $reunion->fecha = $request->input('fecha');
    
        // Guardar la reunión en la base de datos
        $reunion->save();
        
        // Redirigir al listado de reuniones
        return redirect()->route('reuniones.index');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(Reunion $reunion)
    {
        // Mostrar una reunión específica con su agenda y sala
        return view('reuniones.show', compact('reunion'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reunion $reunion)
    {
        // Obtener todas las agendas y salas disponibles
        $agendas = Agenda::all();
        $salas = Sala::all();
    
        // Mostrar el formulario de edición con los datos de la reunión
        return view('reuniones.edit', compact('reunion', 'agendas', 'salas'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reunion $reunion)
    {
        $reunion->agendas_id = $request->input('agendas_id');
        $reunion->salas_id = $request->input('salas_id');
        $reunion->fecha = $request->input('fecha');
        
        // Guardar los cambios en la reunión
        $reunion->save();
        
        // Redirigir al listado de reuniones
        return redirect()->route('reuniones.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reunion $reunion)
    {
        // Eliminar la reunión de la base de datos
        $reunion->delete();
    
        // Redirigir al listado de reuniones
        return redirect()->route('reuniones.index');
    }
    
}

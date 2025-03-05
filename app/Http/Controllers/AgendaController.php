<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::all();
        return view('agendas.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agendas = new Agenda;
        $agendas->nombre = $request->input('nombre');
        $agendas->telefono = $request->input('telefono');
        $agendas->email = $request->input('email');
        $agendas->fecha = $request->input('fecha');
        // para guardarlo en la base de datos
        $agendas->save();
        // para volver a la pagina anterior 
        return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $agendas = Agenda::find($id);
        $agendas->nombre = $request->input('nombre');
        $agendas->telefono = $request->input('telefono');
        $agendas->email = $request->input('email');
        $agendas->fecha = $request->input('fecha');
        // para guardarlo en la base de datos
        $agendas->update();
        // para volver a la pagina anterior 
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $agendas = Agenda::find($id);
        // para guardarlo en la base de datos
        $agendas->delete();
        // para volver a la pagina anterior 
        return redirect()->back();
        //
    }
}

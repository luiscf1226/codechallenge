<?php

namespace App\Http\Controllers;

use App\Models\quehaceres;
use Illuminate\Http\Request;

class QueHaceresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostrar todos los quehaceres
        $quehaceres = QueHaceres::all();
        return view('quehaceres.index', compact('quehaceres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar el formulario para crear un nuevo quehacer
        return view('quehaceres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quehacer = new QueHaceres();
        $quehacer->descripcion = $request->descripcion;
        $quehacer->completado = $request->completado;
        $quehacer->user_id = auth()->id(); // Automatically set the user ID from the logged-in user
        $quehacer->save();

        return redirect()->route('quehaceres.index')->with('success', 'Quehacer creado con éxito');
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
        //
    }
    //función para marcar como completado un quehacer
    public function complete(Request $request, $id)
    {
        $quehacer = QueHaceres::findOrFail($id);
        $quehacer->completado = !$quehacer->completado;
        $quehacer->save();

        return back()->with('success', 'Quehacer updated successfully');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    //Eliminar todos los quehaceres
    public function deleteAll()
    {
        QueHaceres::query()->delete();
        return redirect()->route('quehaceres.index')->with('success', 'Todos los quehaceres han sido eliminados');
    }
    //Eliminar todos los quehaceres completados
    public function deleteCompleted()
    {
        QueHaceres::where('completado', true)->delete();
        return redirect()->route('quehaceres.index')->with('success', 'Todos los quehaceres completados han sido eliminados');
    }
}
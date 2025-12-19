<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipo = Equipo::getEquipos();
        return view ('equipo.index', compact('equipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'marca' => 'required|max:25',
            'defecto' => 'required',
            'nombre_duenio' => 'required|max:50',
            'telefono_duenio' => 'required|max:10',
            'estado' => 'required',
        ]);

        Equipo::createEquipo($request->all());

        return redirect()->route('equipo.index')
            ->with('sucess', 'El equipo ha sido registrado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        return view('equipo.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'tipo' => 'required',
            'marca' => 'required|max:25',
            'defecto' => 'required',
            'nombre_duenio' => 'required|max:50',
            'telefono_duenio' => 'required|max:10',
            'estado' => 'required',
        ]);

        $equipo->updateEquipo($request->all());

        return redirect()->route('equipo.index')
            ->with('success', 'El quipo ha sido actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}

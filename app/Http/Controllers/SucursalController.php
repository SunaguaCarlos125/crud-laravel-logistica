<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sucursals = Sucursal::latest()->paginate(10);
        return view('sucursals.index', compact('sucursals'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sucursals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ciudad'             => 'required|string',
            'direccion_fisica'   => 'required|string',
            'telefono_contacto'  => 'required|integer',
        ]);

        Sucursal::create($request->all());

        return redirect()->route('sucursals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sucursal $sucursal)
    {
        return view('sucursals.show', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sucursal $sucursal)
    {
        return view('sucursals.edit',compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $request->validate([
            'ciudad'             => 'required|string',
            'direccion_fisica'   => 'required|string',
            'telefono_contacto'  => 'required|integer',
        ]);
        $sucursal->update($request->all());
        return redirect()->route('sucursals.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursals.index')->with('success','Sucursal Eliminada');

    }
}

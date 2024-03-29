<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Models\Empleado;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prendas = Prenda::all();
        return view('prenda.index-prenda', compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $empleado = Empleado::all();
        return view('prenda.create-prenda', compact('empleado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tipo' => 'required|min:5|max:255',
            'color' => 'required|min:4|max:255',
            'talla' => 'required|integer|max:100',
            'costo' => 'required|integer|max:1000',
        ]);

        Prenda::create($request->all()); //Ingresa los datos a las columnas que esten definidas en los FILLABLE

        return redirect()->route('prenda.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        return view('prenda.show-prenda', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        return view('prenda.edit-prenda', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        //
        $request->validate([
            'tipo' => 'required|min:5|max:255',
            'color' => 'required|min:4|max:255',
            'talla' => 'required|integer|max:100',
            'costo' => 'required|integer|max:1000',
        ]);

        Prenda::where('id', $prenda->id)->update($request->except('_token','_method'));//si ponemos except ponemos las columnas que evitamos que edite y si ponemos el only es poner las columnas que queremos editar  

        //$prenda->tipo = $request->tipo;
        //$prenda->color = $request->color;
        //$prenda->talla = $request->talla;
        //$prenda->costo = $request->costo;
        //$prenda->save();

        return redirect()->route('prenda.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        //
        $prenda->delete();
        return redirect()->route('prenda.index');
    }
}

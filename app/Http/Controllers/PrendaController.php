<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
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
        return view('prenda.ingresa-prenda',);
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
            'talla' => 'required|integer|max:9',
            'costo' => 'required|integer|max:9',
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        //
    }
}

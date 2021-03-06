<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

use App\Http\Requests\StoreCargoRequest;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        //$cargo = Cargo::where('id', 3)
        //->get();

        //return $cargo;
        //return "página principal del cargo";
        return view('cargo.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCargoRequest $request)
    {
        $validated = $request->validated();

        //return $request->all();
        //return $request->cargo;

        // $cargo = new Cargo();
        // $cargo->cargo = $request->cargo;
        // $cargo->descripcion = $request->descripcion;
        // $cargo->save();

        $cargo = Cargo::create($request->all());
        return redirect()->route('cargo.index')->with('estado', 'Se registró exitosamente el cargo: ' . $request->cargo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "página de detalles de un cargo en específico";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {

       return view('cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {

        $request->validate([
            'cargo' => 'required|max:50|unique:cargos,cargo,'.$cargo->id,
            'descripcion' => 'required'
        ]);

        $cargo->update($request->all());
        // $cargo = Cargo::find($id);
        // $cargo->cargo = $request->cargo;
        // $cargo->descripcion = $request->descripcion;
        // $cargo->save();
        return redirect()->route('cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        //$cargo = Cargo::find($id);
        $cargo->delete();
        return redirect()->route('cargo.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Incidente;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidente = Incidente::create($request->all());
        return redirect()->route('incidentes.show', [$incidente->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function show(Incidente $incidente)
    {
        $cantidadObjetosTotal = $incidente->objetos()->count();
        return view('incidentes.show', [
          'incidente' => $incidente,
          'cantidadObjetosTotal' => $cantidadObjetosTotal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidente $incidente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidente $incidente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidente  $incidente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidente $incidente)
    {
        //
    }
}

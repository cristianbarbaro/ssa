<?php

namespace App\Http\Controllers;

use App\Incidente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreIncidente;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = Auth::user()->incidentes()->get();
        return view('incidentes.index', [
          'incidentes' => $incidentes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('incidentes.create', [
          'user_id' => $user->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreIncidente  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncidente $request)
    {
        $incidente = Incidente::create($request->all());

        if($request->has('objeto'))
        {
          $objetos = $request->get('objeto');
          // Se guarda los objetos en la base de datos:
          foreach($objetos as $id => $objeto){
              $incidente->objetos()->create($objeto);
          }
        }
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

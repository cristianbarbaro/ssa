<?php

use Illuminate\Http\Request;
Use App\Incidente;
Use App\Objeto;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('incidentes', function() {
    return Incidente::with('objetos')->get();
});

Route::get('incidentes/noAsignado', function() {
    // retorna el primer incidente que no ha sido asignado.
    $incidente = Incidente::where('estado', 'CREADO')->first();

    return $incidente->load('objetos');
});

Route::get('incidentes/{id}', function($id) {
    // retorna el incidente con el id pedido.
    return Incidente::findOrFail($id);
});

Route::post('incidentes/cambioEstado/recibido', function(Request $request) {
    $incidente = Incidente::findOrFail($request->get('idIncidente'));
    $incidente->estado = "RECIBIDO";
    $incidente->save();
    //$incidente->update(['estado' => "RECIBIDO"]);
    return $incidente;
});

Route::post('incidentes/cambioEstado/seguimiento', function(Request $request) {
    $incidente = Incidente::findOrFail($request->get('idIncidente'));
    $incidente->estado = "SEGUIMIENTO";
    $incidente->save();
    return $incidente;
});

Route::post('incidentes/cambioEstado/aceptado', function(Request $request) {
    $incidente = Incidente::findOrFail($request->get('idIncidente'));
    $incidente->estado = "ACEPTADO";
    $incidente->save();
    return $incidente;
});

Route::post('incidentes/cambioEstado/rechazado', function(Request $request) {
    $incidente = Incidente::findOrFail($request->get('idIncidente'));
    $incidente->estado = "RECHAZADO";
    $incidente->save();
    return $incidente;
});

Route::post('incidentes', function(Request $request) {
    // crea un nuevo incidente. Espera recibir un json de la siguiente forma:
    // { "user_id": 1, "descripcionIncidente": "Descripcion de incidente", "fechaIncidente": "2017/10/10" }
    return Incidente::create($request->all());
});

Route::put('incidentes/{id}', function(Request $request, $id) {
    // actualiza datos del incidente. Espera recibir un json.
    $incidente = Incidente::findOrFail($id);
    $incidente->update($request->all());

    return $incidente;
});

Route::delete('incidentes/{id}', function($id) {
    // borra un incidente con id recibido.
    Incidente::findOrFail($id)->delete();

    return 204;
});

Route::get('objetos', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Objeto::all();
});

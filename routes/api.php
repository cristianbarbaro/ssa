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
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Objeto::all();
});

Route::get('incidentes/noAsignado', function() {
    $incidente = Incidente::where('estado', 'CREADO')->first();

    return $incidente->load('objetos');
});

Route::get('incidentes/{id}', function($id) {
    return Incidente::find($id);
});

Route::post('incidentes', function(Request $request) {
    return Incidente::create($request->all);
});

Route::put('incidentes/{id}', function(Request $request, $id) {
    $incidente = Incidente::findOrFail($id);
    $incidente->update($request->all());

    return $incidente;
});

Route::delete('incidentes/{id}', function($id) {
    Incidente::find($id)->delete();

    return 204;
});

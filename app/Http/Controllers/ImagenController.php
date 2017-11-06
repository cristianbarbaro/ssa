<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use League\Flysystem\Filesystem;
use Dropbox\Client;
use Dropbox\WriteMode;

class ImagenController extends Controller
{

    public function curl_post_image($file, $incidente_id)
    {
      $ch = curl_init("https://content.dropboxapi.com/2/files/upload");

      $fp = fopen(realpath($file), 'rb');
      curl_setopt($ch, CURLOPT_PUT, true);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($ch, CURLOPT_INFILE, $fp);
      curl_setopt($ch, CURLOPT_INFILESIZE, filesize(realpath($file)));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $path = "/ssa/" . $incidente_id . "/" . $file->getClientOriginalName();

      $dropbox_key = config('app.dropboxkey');

      $headers = array();
      $headers[] = "Authorization: Bearer " . $dropbox_key;
      $headers[] = "Dropbox-Api-Arg: {\"path\": \"" . $path . "\",\"mode\": \"add\",\"autorename\": true,\"mute\": false}";
      $headers[] = "Content-Type: application/octet-stream";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
          return false;
      }
      curl_close ($ch);
      return true;
    }

    public function curl_get_shared_link($file, $incidente_id)
    {
      $dropbox_key = config('app.dropboxkey');
      $path = "/ssa/" . $incidente_id . "/" . $file->getClientOriginalName();

      $ch = curl_init("https://content.dropboxapi.com/2/sharing/get_shared_link_file");

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);

      $headers = array();
      $headers[] = "Authorization: Bearer " . $dropbox_key;
      $headers[] = "Dropbox-Api-Arg: {\"url\": \"https://www.dropbox.com/s/2sn712vy1ovegw8/" . $file->getClientOriginalName() . "?dl=0\",\"path\": \"" . $path . "\"}";
      $headers[] = "Content-Type: text/plain; charset=utf-8";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
          return false;
      }
      curl_close ($ch);

      return true;
    }

    public function curl_get_temporary_link($file, $incidente_id)
    {
      // Permite descargar el archivo a través de un enlace temporal.
      $dropbox_key = config('app.dropboxkey');
      $path = "/ssa/" . $incidente_id . "/" . $file->getClientOriginalName();

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, "https://api.dropboxapi.com/2/files/get_temporary_link");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\": \"". $path ."\"}");
      curl_setopt($ch, CURLOPT_POST, 1);

      $headers = array();
      $headers[] = "Authorization: Bearer " . $dropbox_key;
      $headers[] = "Content-Type: application/json";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      dd(json_decode($result));

      curl_close ($ch);
    }

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
    public function create($incidente_id)
    {
      return view('imagenes.create',[
        'incidente_id' => $incidente_id,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $incidente_id = $request->input('incidente_id');
      $files = $request->file('nombre');

      if ($request->hasFile('nombre'))
      {
        foreach($files as $file)
          $this->curl_post_image($file, $incidente_id);
          $shared_link = $this->curl_get_temporary_link($file, $incidente_id);
      }
      // return redirect()->route('incidentes.create');
      return "OK";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

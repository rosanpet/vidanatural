<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AsociadosController extends Controller
{
    public function create(){

        return view('registro-asociados');
    }

    public function store(Request $request){

        $url='https://vidanaturalargentina.com/api';
        $response = Http::post($url, '/create-user', [
            'apellido' => $request->apellido,
            'nombre' => $request->nombre,
            'dni' => $request->dni,
            'whatsapp-codigo-pais' => $request->whatsappcodigopais,
            'numero-telefono' => $request->numerotelefono,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'patrocinador' => $request->patrocinador,
            'id-condicion-fiscal' => $request->idcondicionfiscal,
            'id-provincia' => $request->idprovincia,
            'id- localidad' => $request->idlocalidad,
            'codigo-postal' => $request->codigopostal,
            'cuit' => $request->cuit,
        ]);
        /* return redirect()->route('create'); */
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ConsultaApi extends Controller
{
    
    public function apiConsult (){

        $response=HTTP::get('https://pokeapi.co/api/v2/pokemon/');
        $respuesta=$response['results'][5];

        $respuesta=json_encode($respuesta);

        return gettype($respuesta);
        return view('auth.poquedex',compact('respuesta'));
    }

}

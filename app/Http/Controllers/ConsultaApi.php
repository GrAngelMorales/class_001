<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ConsultaApi extends Controller
{

    public function apiConsult() {

        $url = "https://pokeapi.co/api/v2/pokemon/";
        $contentFromApi = \file_get_contents($url) ?: '';
        $testForecast = \GuzzleHttp\json_decode($contentFromApi, true);
        $respuesta = $testForecast['results'];

        return view('auth.poquedex', compact('respuesta'));
    }

    public function getDetalles(Request $request){
        
    }

}

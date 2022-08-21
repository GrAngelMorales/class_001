@extends('layout.layout')

@section('title', '- Pokedex')

@php
$i = 1;
@endphp

@section('poquedex')
    @foreach ($respuesta as $row)
        <div class="col-3 mt-5">
            <div class="card p-4 shadow" id="card-pkd">
                <h5 class="card-title">{{ $row['name'] }}</h5>
                <button type="button" class="btn btn-danger" id="{{ $i++ }}"
                    onclick="detallePokemon(id)">Detalles</button>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="infoPokemon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-bg-danger">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row p-5">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12 mt-4" id="im_pok">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <h4 class="poke-h4">ALTURA: <span id="alt"></span> m</h4>
                                </div>
                                <div class="col-12">
                                    <h4 class="poke-h4">PESO: <span id="pes"></span> kg</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table">
                                        <h4 class="poke-h4">HABILIDADES</h4>
                                        <thead class="bg-primary bg-opacity-10">
                                            <tr>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">INFO</th>
                                            </tr>
                                        </thead>
                                        <tbody id="hab">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table">
                                        <h4 class="poke-h4">TIPO</h4>
                                        <thead class="bg-danger bg-opacity-10">
                                            <tr>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">INFO</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tip">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-bg-primary">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/pokemones.js') }}" type="text/javascript"></script>
@endsection

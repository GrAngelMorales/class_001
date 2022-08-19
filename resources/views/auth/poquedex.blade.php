@extends('layout.layout')

@section('title', '- Pokedex')

@section('poquedex')
    <div class="card shadow p-5">
        @foreach ($respuesta as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->url }}</td>
        </tr>
        @endforeach
    </div>
@endsection

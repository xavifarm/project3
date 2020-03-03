@extends('layout')

@section('content')
    <h2 style="margin-top:70px;">Lista de pasteles</h2>
    <ul>
    @foreach ($pasteles as $pastel)
       <li> {{$pastel->titulo}}<br>
          {{$pastel->ingredientes}}<br>
          {{$pastel->preparacion}}<br>
          <a href={{route('detalle_pastel',['id'=>$pastel->id])}}>ver detalles</a></li>
        </li><hr>
    @endforeach
    </ul>
@endsection

@section('sidebar')
    @parent
        <ul>
            <li><a href={{route("pastel_nuevo")}}>Añadir nuevo Pastel</a></li>
        </ul>
@endsection  
@extends('layout')

    @section('content')
<h1>Modifica el articulo {{$pasteles->id}}</h1>
        
        <form method="POST" action = {{url("/pasteles/store/{$pastel->id}")}}>
            {{csrf_field()}}
            
            <label for="titulo">Título</label><br>
            <input type="text" name=titulo id="titulo" value={{$pastel->titulo}}><br>
            @if ($errors->has('titulo'))
                <div class="alert alert-danger">{{ $errors->first('titulo') }}</div>
            @endif

            <label for="ingredientes">Ingredientes</label><br>
            <input type="text" name="ingredientes" id="ingredientes" value={{$pastel->ingredientes}}><br>
            @if ($errors->has('ingredientes'))
                <div class="alert alert-danger">{{ $errors->first('ingredientes') }}</div>
            @endif

            <label for="preparacion">Preparación</label><br>
            <textarea rows="10" cols="50" name="preparacion" id="preparacion" >{{$pastel->preparacion}}</textarea><br>
            @if ($errors->has('preparacion'))
                <div class="alert alert-danger">{{ $errors->first('preparacion') }}</div>
            @endif
            <input type="submit"  value="Enviar">
        </form>
    @endsection
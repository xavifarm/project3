@extends('layout')

@section('title',"Pastel #{$id}")

@section('content')

    <h1>Pastel #{{$id}}</h1>
    Mostrando el detalle del Pastel: {{$id}}

@endsection


@extends('base')
@section('contenido')

@if (session('nombre'))
    <h1>Hola {{ session('nombre') }} !</h1>
    <h2>Esta es tu página de usuario</h2>
@endif

@stop
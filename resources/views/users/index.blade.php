@extends('templates.template')
@section('contenido')
    @if (session('registro'))
        <div class="alert alert-success" role="alert">
            {{ session('registro') }}
        </div>
    @endif
    @if (session('login'))
        <div class="alert alert-success" role="alert">
            {{ session('login') }}
        </div>
    @endif
    <h1>Numero de Usuarios: {{ $numeroUsuarios }}</h1>
@endsection

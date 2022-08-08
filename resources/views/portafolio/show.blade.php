<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portafolio Grupo 1 - Twitter</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="js/app.js" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
@extends('layouts.app')

@section('content')
    <div class="container page-section">
        <div class="row justify-content-center page-section">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-body d-flex justify-content-between align-items-center">
                        Detalle del Portafolio
                        <a href="{{ route('portafolio') }}" class="btn btn-danger btn-sm">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <h5 class="card-title">Nombre: {{ $portafolio->nombre }}</h5>
        <h5 class="card-title">Descripción: {{ $portafolio->descripcion }}</h5>
        <h5 class="card-title">Categoría: {{ $portafolio->categoria }}</h5>
        <h5 class="card-title">Vídeo: {{ $portafolio->url }}</h5>
        <h5 class="card-title">Imagen:</h5>
        <img class="img-fluid img-thumbnail" src="{{ $portafolio->getUrl() }}" alt="img-proyecto" width="200"
            height="200">
        <br>
        <br>
        <a href="{{ route('edit', $portafolio) }}" class="btn btn-success btn-sm">Actualizar</a>
        <form action="{{ route('destroy', $portafolio) }}" method="POST" style="display: inline;"
            onsubmit="return confirmation()">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Eliminar</button>
            <script type="text/javascript">
                function confirmation() {
                    if (confirm("¿Estás seguro de eliminar el registro?")) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
        </form>
    </div>
@endsection

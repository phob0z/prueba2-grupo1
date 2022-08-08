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
                    <div class=" card-header card-body d-flex justify-content-between align-items-center">
                        Gestión de Portafolios
                        <a class="btn btn-primary btn-sm" href="{{ route('create') }}">Crear</a>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="container d-flex flex-row flex-wrap justify-content-center gap-3">
            @forelse ($portafolios as $portafolio)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $portafolio->getUrl() }}" class="card-img-top" alt="..." width="150">
                    <div class="card-body">
                        <p class="card-title font-weight-bold">{{ $portafolio->nombre }}</p>
                        <h5 class="card-title text-truncate">{{ $portafolio->descripcion }}</h5>
                        <span class="badge bg-success text-dark">Categoría: {{ $portafolio->categoria }}</span>
                        <br>
                        <br>
                        <a href="{{ route('show', $portafolio) }}" class="btn btn-secondary w-100">Más
                            información</a>
                    </div>
                </div>
                <hr>
            @empty
                <p>No Existen proyectos</p>
            @endforelse
        </div>
    </div>
@endsection

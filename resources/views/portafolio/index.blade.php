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
                <div class="card">
                    <div style="width: 240px; height: 240px">
                        <img src="{{ $portafolio->getUrl() }}" class="card-img-top" style="object-fit: contain; width: 100%;
                        height: 100%;">
                    </div>
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

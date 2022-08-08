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
                        Actualización de un Portafolio
                        <a href="{{ route('show', $portafolio) }}" class="btn btn-danger btn-sm">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card-body">
            <form action="{{ route('update', $portafolio) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" name="nombre" class="form-control form-control-sm" id="colFormLabelSm"
                            value="{{ $portafolio->nombre }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3">{{ $portafolio->descripcion }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Categoría</label>
                    <div class="col-sm-10">
                        <input type="text" name="categoria" class="form-control form-control-sm" id="colFormLabelSm"
                            value="{{ $portafolio->categoria }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputGroupFile01" name="imagen">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Vídeo</label>
                    <div class="col-sm-10">
                        <input type="text" name="video" class="form-control form-control-sm" id="colFormLabelSm"
                            value="{{ $portafolio->url }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Actualizar</button>
            </form>
        </div>
    </div>
@endsection

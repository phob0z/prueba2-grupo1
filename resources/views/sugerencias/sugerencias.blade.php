@extends('layouts.app')

@section('content')
    <div class="container page-section">
        <div class="container mt-5 col-12 col-sm-6">
            <p class="text text-center h2">Formulario de quejas, novedades o sugerencias</p>
            <form method="POST" action="{{ route('sugerencias.form') }}">
                @csrf
                <div class="mb-3">
                    <label for="data1" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="data1"
                        name="nombre" value="{{ old('nombre') }}">
                    {{-- <div class="form-text">Ingrese un nombre válido.</div> --}}
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data2" class="form-label">Apellido</label>
                    <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="data2"
                        name="apellido" value="{{ old('apellido') }}">
                    {{-- <div class="form-text">Ingrese un nombre válido.</div> --}}
                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data3" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control @error('correo') is-invalid @enderror" id="data3"
                        name="correo" value="{{ old('correo') }}">
                    {{-- <div class="form-text">Ingrese un correo válido.</div> --}}
                    @error('correo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data4" class="form-label">Asunto</label>
                    <input type="asunto" class="form-control @error('asunto') is-invalid @enderror" id="data4"
                        name="asunto" value="{{ old('asunto') }}">
                    {{-- <div class="form-text">Ingrese un asunto para procesar</div> --}}
                    @error('asunto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data5" class="form-label">Ingrese detalladamente su queja, novedad o sugerencia</label>
                    <textarea type="mensaje" class="form-control @error('mensaje') is-invalid @enderror" id="data5"
                        name="mensaje" value="{{ old('mensaje') }}"></textarea>
                    {{-- <div id="emailHelp" class="form-text">Ingrese la información</div> --}}
                    @error('mensaje')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block mx-auto d-block">Enviar</button>
            </form>
        </div>


        {{-- <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sugerencias</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form method="POST" action="{{ route('sugerencias.form') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Nombre" id="name" type="text"
                            placeholder="Nombre..." data-sb-validations="required" />
                        <label for="name">{{__('Name')}}</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es obligatorio.
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Correo" id="email" type="email"
                            placeholder="nombre@ejemplo.com" data-sb-validations="required,email" />
                        <label for="email">{{__('Email Address')}}</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">El correo es obligatorio.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es válido.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="Telefono" id="phone" type="tel"
                            placeholder="(099) 999-9999" data-sb-validations="required" />
                        <label for="phone">{{__('Phone number')}}</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">El número de teléfono es obligatorio.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="Mensaje" id="message" type="text"
                            placeholder="Escriba su mensaje aquí..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">{{__('Message')}}</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es obligatorio.</div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Correo enviado correctamente!</div>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-xl" id="submitButton">Send</button>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>
            </div>
        </div> --}}
    </div>
@endsection

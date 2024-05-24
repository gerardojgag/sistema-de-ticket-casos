@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row mb-1">
        <div class="col-12 text-center">
            <img src="{{ asset('img/umg.png')}}" alt="" style="width: 300px;">
        </div>
    <style>
        /* Estilos CSS para la imagen de fondo */
        body {
            background-image: url('img/Ticket-Management-System.png')!important;
            background-size: cover; /* Ajusta la imagen al tamaño de la ventana del navegador */
            margin: 0; /* Elimina los márgenes predeterminados para que la imagen cubra toda la página */
            padding: 0; /* Elimina el relleno predeterminado para que la imagen cubra toda la página */
        }
    </style>
      
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Perdiste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                       <!--  <hr>
                        <div class="row justify-content-center" style="visibility: hidden";>
                            <div class="col-6">
                                <a href="{{ url('google/auth/redirect') }}" class="btn btn-danger btn-block"><i class="fab fa-google"></i> Google</a>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2" style="visibility: hidden";>
                            <div class="col-6">
                                <a href="{{ url('facebook/auth/redirect') }}" class="btn btn-primary btn-block"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2"style="visibility: hidden";>
                            <div class="col-6">
                                <a href="{{ url('microsoft/signin') }}" class="btn btn-warning btn-block"><i class="fab fa-microsoft"></i> Microsoft</a>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection

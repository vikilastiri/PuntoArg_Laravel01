@extends('layouts.app')

@section('content')
  {{--  LOGIN LARAVEL --}}
  <div class="fondo">

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MI CUENTA') }}</div>

                <div class="card-body registro2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group form-row align-items-center">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label> --}}

                            <div class="datosUsuario">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="E-mail" autocomplete="email" autofocus>
                                  <i class="fa fa-envelope" ></i>

                                @error('email')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-row align-items-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">  {{ __('Contraseña') }}</label> --}}



                            <div class="datosUsuario">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña" autocomplete="current-password">
                                  <i class="fas fa-key" ></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="crearCuenta">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row align-items-center mb-0">
                            <div class="crearCuenta">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recuperar contraseña') }}
                                    </a>
                                @endif
                            </div>

                        </div>
                        <div class="form-group form-row align-items-center mb-0">
                          <div class="crearCuenta">
                            <p>¿No tienes una cuenta?</p>
                            <p> <a class=" btn btn-link"href="/register">CREAR CUENTA</a> </p>
                          </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer', '')

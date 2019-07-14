@extends('layouts.app')

@section('content')
  <div class="fondo">

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('REGISTRO') }}</div>

                <div class="card-body registro2">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group form-row align-items-center">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label> --}}

                            <div class=" datosUsuario ">
                                <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre de usuario"><i class="fa fa-user" ></i>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-row align-items-center">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label> --}}

                            <div class=" datosUsuario">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail"><i class="fa fa-envelope" ></i>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-row align-items-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label> --}}

                            <div class=" datosUsuario">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Contraseña"><i class="fas fa-key"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-row align-items-center">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label> --}}

                            <div class=" datosUsuario">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir Contraseña"><i class="fas fa-key"></i>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
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

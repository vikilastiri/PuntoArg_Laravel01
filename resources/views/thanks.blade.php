@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MI CARRITO') }}</div>

                <div class="card-body registro2 text-center ">
                    <h1>¡Muchas gracias por su compra!</h1> <br>
                    <a class="btn btn-primary"href="/history"> Ver historial de compra</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer', '')

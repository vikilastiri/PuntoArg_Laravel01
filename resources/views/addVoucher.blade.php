@extends('layouts.app')

{{-- @section('title', 'New Attraction')
@endsection --}}
@section('content')
  <div class="fondo">

</div>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('AGREGAR VOUCHER') }}
        </div>

        <div class="card-body registro2">
            <form class="col-md-6 offset-md-3" action="/addVoucher" method="POST" enctype="multipart/form-data">
                {{-- <ul>
                    @foreach ($errors->all() as $error)

                    <li>{{$error}}</li>
                    @endforeach
                </ul> --}}
                @csrf
                <div class="form-group form-row align-items-center">

                    <div class="col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" class="form-control" name="name" value="">
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <div class="col-md-6">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" id="description" name="description" value="">

              </textarea>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                  <div class="col-md-6">  <label for="description">Precio</label>
                    <input id="price" class="form-control"type="number" required name="price" value="">
                  </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <div class="col-md-6">
                        <label for="featured_img">Imagen</label>
                        <input type="file" id="featured_img" class="form-control" name="featured_img" value="" required  autofocus>
                    </div>
                </div>


                <div class="form-group row  ">
                    <div class="col-md-6">
                        <button class="btn btn-info" type="submit">Guardar</button>

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

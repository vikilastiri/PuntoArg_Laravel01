@extends('layouts.app')

{{-- @section('title', 'New Attraction')
@endsection --}}
@section('content')
  <div class="fondo">

</div>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-6">
    <div class="card">
        <div class="card-header">{{ __('AGREGAR VOUCHER') }}
        </div>

        <div class="card-body registro2">
            <form class="" action="/addVoucher" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="form-group form-row align-items-center">

                    <div class="col-md-12">
                        <label for="name">Nombre</label>
                        <input type="text" id="nameVoucher" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"> @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <div class="col-md-12">
                        <label for="description">Descripción</label>
                        <textarea class=" form-control @error('description') is-invalid @enderror" id="description" name="description" value="">

              </textarea>
              @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                  <div class="col-md-12">  <label for="description">Precio</label>
                    <input id="price" class="form-control @error('price') is-invalid @enderror"type="number" name="price" value="">@error('price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <div class="col-md-12">
                        <label for="featured_img">Imagen</label>
                        <input type="file" id="featured_img" class="form-control  @error('featured_img') is-invalid @enderror " name="featured_img" value="" required  autofocus>  @error('featured_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>


                <div class="form-group row  ">
                    <div class="col-md-6">
                        <button class="btn btn-primary" type="submit">Guardar</button>

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

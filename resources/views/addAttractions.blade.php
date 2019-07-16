@extends('layouts.app')

{{-- @section('title', 'New Attraction')
@endsection --}}



@section('content')

  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}




  <div class="fondo">

  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">{{ __('AGREGAR ATRACCION') }}
          </div>

          <div class="card-body registro2">
            <form class="" action="/addAttractions" method="POST" enctype="multipart/form-data">

              @csrf
              <div class="form-group form-row align-items-center">

                <div class="col-md-6">
                    <label for="name">Nombre</label>
                    <input type="text" id="nameVoucher" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group form-row align-items-center">
                <div class="col-md-12">
                  <label for="description">Descripción</label>
                  <textarea class=" form-control @error('description') is-invalid @enderror"  id="description" name="description" value="" autofocus>

                  </textarea>
                  @error('description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

              </div>
              <div class="form-group form-row align-items-center">
                <div class="col-md-12">
                  <input class="form-control @error('featured_img') is-invalid @enderror"type="file" id="featured_img" class="form-control" name="featured_img" value="" required  autofocus>
                    @error('featured_img')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group form-row align-items-center">
                  <label for="">Categorias</label>
                  <select class="form-control " name="category_id">
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{$category->name}}</option>

                    @endforeach
                  </select>
                </div>
                                 {{-- PROVINCIAS --}}
                <div class="form-group form-row align-items-center">
                  <label for="locations">Provincia</label>
                  <select id="location_id" class="form-control" name="location_id">
                    @foreach ($locations as $location)
                      <option value="{{ $location->id }}">{{$location->name}}</option>

                    @endforeach
                  </select>
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

@push('scripts')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
@endpush

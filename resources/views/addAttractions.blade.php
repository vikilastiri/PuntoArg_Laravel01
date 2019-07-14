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
        <div class="card-header">{{ __('AGREGAR ATRACCION') }}
        </div>

        <div class="card-body registro2">
            <form class="" action="/addAttractions" method="POST" enctype="multipart/form-data">
                <ul>
                    @foreach ($errors->all() as $error)
                    {{-- @dd($errors->all()) --}}
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @csrf
                <div class="form-group form-row align-items-center">

                    <div class="col-md-6">
                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <div class="col-md-6">
                        <label for="description">Descripción</label>
                        <textarea style="width:600px; height:200px;" id="description" name="description" value="" autofocus>

              </textarea>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <div class="col-md-6">
                        <input type="file" id="featured_img" class="form-control" name="featured_img" value="" required  autofocus>
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
                <div class="form-group form-row align-items-center">
                  <label for="locations">Provincia</label>
                  <select class="form-control" name="location_id">
                    @foreach ($locations as $location)
                      <option value="{{ $location->id }}">{{$location->name}}</option>

                    @endforeach

                  </select>
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

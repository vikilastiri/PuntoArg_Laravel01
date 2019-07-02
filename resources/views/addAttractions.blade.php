@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
      <div class="card-header">{{ __('AGREGAR ATRACCION') }}</div>
  <div class="card-body registro2">
      <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group row  ">
              <div class="col-md-6">
                  <input  type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nombre" autocomplete="name" autofocus>
              </div>
          </div>
          <div class="form-group row  ">
              <div class="col-md-6">
                <textarea style="width:600px; height:200px;" name="description" value="{{ old('description') }}" required placeholder="Descripcion" autocomplete="description" autofocus>

              </textarea>
              </div>
              </div>

              <div class="form-group row  ">
                  <div class="col-md-6">
                      <input  type="file" class="form-control" name="featured_img" value="{{ old('featured_img') }}" required style="width:300px;" autocomplete="featured_img" autofocus>
                  </div>
              </div>



          <div class="form-group row  ">
              <div class="col-md-6">

                    <button type="submit" class="btn btn-primary">
                        {{ __('Enviar') }}
                    </button>
              </div>
          </div>
      
</div>
</div>
@endsection

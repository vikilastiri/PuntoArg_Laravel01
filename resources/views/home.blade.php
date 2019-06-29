@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    BIENVENID@
                </div>
            </div>
        </div>
    </div> --}}
    <section class="">

    <div class="carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="http://placeimg.com/960/400/arch" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="http://placeimg.com/960/400/people" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="http://placeimg.com/960/400/nature" class="d-block w-100" alt="...">
        </div>
      </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
<div class="tarjetas tj-descuento">
    <div class="card text-center tj-W" style="">
        <img src="http://placeimg.com/640/360/tech" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">.ArgPass 3 Días</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>
    </div>

    <div class="card text-center tj-W" style="">
      <img src="http://placeimg.com/640/360/tech" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">.ArgPass 7 Días</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>
    </div>
    <div class="card text-center tj-W" style="">
        <img src="http://placeimg.com/640/360/tech" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">.ArgPass 15 Días</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>
    </div>

      </div>
</section>
    <!--PRINCIPALES-->
    <section class="principales">
      <span class="span-desta">
      <h2 class="titulo-desta">PRINCIPALES DESTINOS</h2>
      </span>
      <div class="tarjetas tj-descuento">


      <section class="articulo">
        <div class="titulo-art">
          <p class="titulo-art">Noroeste</p>
        </div>
        <img class="img-principal" src="https://lorempixel.com//640/360/nature" alt="">
        <p class="descripcion-art">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, reiciendis.</p>
      </section>

      <section class="articulo">
        <div class="titulo-art">
          <p class="titulo-art">Patagonia</p>
        </div>
        <img class="img-principal" src="https://lorempixel.com//640/360/nature" alt="">
        <p class="descripcion-art">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, reiciendis.</p>
      </section>

      <section class="articulo">
        <div class="titulo-art">
          <p class="titulo-art">Litoral</p>
        </div>
        <img class="img-principal" src="https://lorempixel.com//640/360/nature" alt="">
        <p class="descripcion-art">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, reiciendis.</p>
      </section>

      <section class="articulo">
        <div class="titulo-art">
          <p class="titulo-art"> Cuyo</p>
        </div>
        <img class="img-principal" src="https://lorempixel.com//640/360/nature" alt="">
        <p class="descripcion-art">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, reiciendis.</p>
      </section>
        </div>
    </section>

    </div>



</div>
@endsection

@extends('layouts.app')

@section('content')
<section class="carousel">

    <div class="">
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
                    <img src="http://placeimg.com/960/400/animals" class="d-block w-100" alt="...">
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
{{-- VOUCHERS --}}
<div class="container flex-container2">
    @foreach ($vouchers as $voucher)
<article class="destacado card text-center">

  <a href="#" class="desta-link desta"><img src="/storage/vouchers/{{$voucher->featured_img}}" alt=""> </a>
    <h5 class="att_name">{{$voucher->name}}</h5>
    <p class="txt-desc">{{$voucher->description}}</p>
    <ul class="">
      <li class=""><a href="/vouchers/{{$voucher->id}}/addtocart" class="btn btn-primary">Comprar</a></li>
    </ul>

      </article>
        @endforeach
  </div>

</section>
<!--ATRACCIONES DESTACADAS-->


<section class="titulo-seccion">
    <span class="">
        <h4 class="titulo-desta">Atracciones Destacadas</h4>
    </span>

</section>
<section class="destacados">
<div class="flex-container2  container  ">
    @forelse ($attractions as $attraction)

<article class="destacado ">

  <a href="#" class="desta-link desta"><img src="/storage/attractions/{{$attraction->featured_img}}" alt=""> </a>
    <h5 class="att_name">{{$attraction->name}}</h5>
    {{-- <p class="txt-desc">{{$attraction->description}}</p> --}}
    <ul class="consulta-desta">
      <li class="consulta"><a href="#">+ Info</a></li>
    </ul>

      </article>
    @empty
    @endforelse
  </div>
  <div class="flex-container">
    <span class="btn btn-primary ver-mas"> <a href="/attractions">Ver más</a> </span>
  </div>
</section>


@endsection

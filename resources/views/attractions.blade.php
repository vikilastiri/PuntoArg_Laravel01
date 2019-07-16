@extends('layouts.app')

@section('content')



{{--
<h1>Lista de busqueda</h1>
<ul>
@forelse($attractions as $attraction)
  <li><a href="/attractions/{{$attraction->id}}">{{$attraction->name}} </a></li>
@empty
@endforelse
</ul> --}}



      <!--DESTACADOS-->
      <section class="destacados">

        <div class="">
          <span class=" flex-container">
              {{-- BUSCADOR --}}

            <form class="buscador" action="/attractions/buscar" method="get" >
              @csrf

              <input class=""type="text" name="search" value="" >
              <button
              class=" btn btn-primary" type="submit"><i class="fas fa-search"></i></button>

            </form>
            <form class="buscador" action="/attractions" method="get">
              @csrf
              <button  class=" btn redo-search btn-secondary" type="submit"><i class="fas fa-redo"></i></button>
            </form>


          </span>

    </div>



          <div class="container flex-container2">
              @foreach ($attractions as $attraction)
          <article class="destacado">

            <a href="#" class="desta-link desta"><img src="/storage/attractions/{{$attraction->featured_img}}" alt=""> </a>
              <h5 class="att_name">{{$attraction->name}}</h5>
              {{-- <p class="txt-desc">{{$attraction->description}}</p> --}}
              <ul class="consulta-desta">
                <li class="consulta"><a href="#" data-name="{{$attraction->name}}" data-description="{{ $attraction->description }}">+ Info</a></li>
              </ul>

                </article>
                  @endforeach
            </div>

            <div class="flex-container paginacion">
              @if (isset($_GET['search']))
              {{$attractions->links()}}
              @endif
            </div>



</section>


@endsection

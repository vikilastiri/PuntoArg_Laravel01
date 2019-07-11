@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('MI CARRITO') }}</div>

                  <div class="card-body registro2 ">
                      <ul >

                          @forelse ($cart as $items)
                          <img src="/storage/vouchers/{{$items->featured_img}}" alt="">
                          <li class="carrito-lista">
                              <h5>{{$items->name}}</h5>

                              Precio: $ {{$items->price}}
                          </li>
                          <li>
                          <form class="carrito-ul" action="/cart/{{$items->id}}" method="post">
                              @csrf
                              <button class="btn btn-secondary" type="submit"><i class="fas fa-trash-alt"></i></button>
                          </form>
                          </li>
                          @empty

                          <p>Su carrito está vacío</p>
                          @endforelse


                          @if ($cart->isNotEmpty())
                              <div class="total">
                            <h5>Total: $ {{ $total }}</h5>
                                </div>
                          @endif


                          @if ($cart->isNotEmpty())
                          <a class="btn btn-primary" href="/cart/close">Comprar</a>
                          @endif
                          </ul>


                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
@section('footer', '')

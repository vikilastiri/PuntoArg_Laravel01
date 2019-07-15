@extends('layouts.app')

@section('content')
  <div class="fondo">

</div>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Historial de compras') }}</div>

                  <div class="card-body registro2">

    <ul class="history-ul">
    @forelse ($history as $cart)
      <li class="history-li">
        {{-- Como todos los items tienen el mismo nro de carrito y la misma fecha de compra, con traer el dato del primer items podemos mostrar todos los datos generales de la compra --}}
        <ul>
          <li>Cart id: {{$cart->first()->cart_number}}</li>
          <li>Fecha de compra: {{$cart->first()->updated_at}} </li>
          <li>Usuario: {{$cart->first()->user['email']}}</li>
        </ul>
        <span >ITEMS</span>
        <ul>
          {{-- Con este detalle vemos el contenido de cada item --}}
          @foreach ($cart as $item)
            <li>Nombre:{{$item->name}}</li>
            <li>Precio:{{$item->price}}</li>

          @endforeach

        </ul>
      </li>
    @empty
      <p>Su historial de compra está vacío</p>
    @endforelse
    </ul>
    </div>
  </div>
</div>
</div>
</div>
  @endsection
@section('footer', '')

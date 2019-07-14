@extends('layouts.app')

@section('content')
  <div class="fondo">

</div>
<div class="container">


    <h1>Voucher</h1>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card text-center">
                @foreach ($vouchers as $voucher)

                <img src="/storage/vouchers/{{$voucher->featured_img}}" alt="">
                <h3>{{$voucher->name}}</h3>
                <p>{{$voucher->description}}</p>
                <a href="/vouchers/{{$voucher->id}}/addtocart"class="btn btn-primary">Comprar</a>
                @endforeach
            </div>
        </div>
    </div>


</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">


    <h1>Atracciones</h1>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card text-center">
                @foreach ($attractions as $attraction)
                {{-- <p>id:{{$attraction->id}} </p> --}}
                <img src="/storage/attractions/{{$attraction->featured_img}}" alt="">
                <h3>{{$attraction->name}}</h3>
                <p>{{$attraction->description}}</p>
                @endforeach
            </div>
        </div>
    </div>


</div>
@endsection

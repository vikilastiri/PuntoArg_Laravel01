@section('atracciones')
<article class="">
  <h2>{{$attraction->name}}</h2>
  <p>id:{{$attraction->id}} </p>
  <img src="/storage/attractions/{{$attraction->featured_img}}" alt="">
  <p>{{$attraction->excerpt}}</p>
  <p>{{$attraction->content}}</p>

</article>

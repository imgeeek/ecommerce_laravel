@extends('master')

@section('content')
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($product as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <img src="{{$item['gallery']}}" class="d-block w-100 carousel_image" alt="...">
        <div class="carousel-caption d-none d-md-block sandesh">
            <h5 class="text text-danger">{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
          </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h3 class="trending">Trending Products</h3>
 <div class="trending-wrapper">

     @foreach ($product as $item)
         
     
     <div class="trending">
       <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" class="item-phone" alt="...">
            <h5 class="text text-danger">{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
          </a>
          </div>
          @endforeach
     </div>
 </div>
@endsection
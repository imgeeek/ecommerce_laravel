@extends('master')

@section('content')
<h3 class="trending">Products you might have searched</h3>
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
@endsection
@extends('master')

@section('content')
    <div class="container">
<div class="row">
    <div class="col-sm-6">
<img src="{{$details['gallery']}}" class="item-phone" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">Back to home page</a>
<h1>Product Name: {{$details['name']}}</h1>
<p>Product Price: {{$details['price']}} </p>
<p>Category: {{$details['category']}} </p>
<p>Description:{{$details['description']}}</p>
<br> <br>
<div class="row">
    <div class="col-sm-4">
        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value={{$details['id']}}>
        <button class="btn btn-primary">Add to Cart</button>
    </form>
        <br> <br>
</div>
<div class="col-sm-4">
    <button class="btn btn-success">Buy Now</button></div>
</div>
    </div>
</div>
    </div>
@endsection
@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
@if(Session::has('success'))
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">
        
            {{ Session::get('success') }}

        </div>
    </div>
</div>
@endif
@foreach($products->chunk(3) as $productChunk)

<div class="row">

@foreach($productChunk as $product)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src=" {{ $product->imagePath }} " alt="" width="90%" height="400">
            <div class="card-body">
                <h1> {{$product->title}} </h1>
              <p class="card-text">{{ $product->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">$ {{ $product->price }}</small>
                <div class="btn-group">
                  <a href=" {{ route('product.addToCart', ['id' => $product->id]) }} " class="btn btn-success" role="button">Add to Cart</a>
                </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    
</div>
@endforeach


@endsection

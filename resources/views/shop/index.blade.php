@extends('layouts.master')
@section('title')
Shop-Index
@stop
@section('content')
@foreach ($products->chunk(3) as $productChunk)
<div class="row">
@foreach ($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail clearfix">
      <img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
      <div class="caption">
        <h3>{{ $product->title }}</h3>
        <p class="description">{{ $product->description }}</p>
        <div class="">
        <div class="pull-left price">
        	<i class="fa fa-inr" aria-hidden="true"></i>{{ $product->price }}
        </div>
        <a href="{{ route('product.addtocart' , ['id' => $product->id]) }}" class="btn btn-success btn-sm pull-right" role="button">Add to Cart</a>  	
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@endforeach
@stop


@extends('layouts.master')
@section('title')
Your Cart
@stop
@section('content')
@if (Session::has('cart'))
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<ul class="list-group">
			
			<table class="table">
				<thead>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>#</th>
						<th>Totalprice</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td><strong>{{ $product['item']->title }}</strong></td>
						<td>
						<span class="label label-success"><i class="fa fa-inr" aria-hidden="true"></i>{{ $product['item']->price }}</span></td>
							<td> <span class="badge">{{ $product['qty'] }}</span> </td>
							<td><span class="label label-success"><i class="fa fa-inr" aria-hidden="true"></i>{{ $product['price'] }} </span></td>
							<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li> <a href="{{ route('products.reduceOne' , ['id' => $product['item']->id]) }}" title="">Reduce One</a></li>
									<li > <a href="{{ route('products.removeAll' , ['id' => $product['item']->id]) }}" title="">Remove All</a></li>
								</ul>
							</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>	
				<hr>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<strong>Total Price :{{ $totalprice }}</strong>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<a href="{{ route('checkout') }}" type="button" class="btn btn-success">CheckOut</a>
		</div>
	</div>
	@else
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="lead">No Items In The Cart !</h2>
		</div>
	</div>
	@endif
	@stop
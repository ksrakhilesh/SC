@extends('layouts.master')
@section('title')
Profile
@stop
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3 class="text-center"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}</h3>
		<hr>
		<h3><span class="label label-primary">My Orders: #{{count($orders)}}</span></h3>
		@foreach ($orders as $order)
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="list-group">
				@foreach ($order->cart->items as $item)
					<li class="list-group-item">
					<span class="badge"><i class="fa fa-inr" aria-hidden="true"></i> {{ $item['price'] }}</span>
						<strong>{{ $item['item']->title }} </strong> <span class="badge">#{{ $item['qty'] }}</span>
					</li>
				@endforeach
				</ul>
			</div>
			<div class="panel-footer"><span class="label label-primary">Total Price:  <i class="fa fa-inr" aria-hidden="true"></i> {{ $order->cart->totalPrice }}</span></div>

		</div>
		@endforeach
	</div>
</div>
@stop
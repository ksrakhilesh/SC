@if (Session::has('success'))
<div class="col-md-12">
	<div class="alert alert-success text-center animated slideInLeft" role="alert">
		<button type="button" class="close" data-dismiss ="alert" aria-hidden ="true">
			&times;       
		</button>
		<strong>Success:</strong>{{ Session::get('success') }}
	</div>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger text-center animated slideInLeft" role="alert">
	<button type="button" class="close" data-dismiss ="alert" aria-hidden ="true">
		&times;       
	</button>
	@foreach ($errors->all() as $error)
	<strong>{{ $error }}</strong>
	@endforeach
</div>
@endif
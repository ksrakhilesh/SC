<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SC | @yield('title')</title>
	@include('partials._styles')
</head>
<body>
	@include('partials._nav')
	<div class="container">
	@include('partials._messages')
		@yield('content')
	</div>
	@include('partials._footer')
	@include('partials._javascript')
</body>
</html>
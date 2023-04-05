<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	@include('layouts.navigation')

	<div class="container">
		@yield('content')
	</div>

	@include('layouts.footer')
</body>
</html>

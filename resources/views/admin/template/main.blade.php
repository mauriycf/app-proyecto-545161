<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/master.scss') }}">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	@include('admin.template.partials.nav')

	<section>
		@yield('content')
	</section>
	
	@include('admin.template.partials.footer')

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/scroll.js') }}"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src="{{ asset('js/foundation.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
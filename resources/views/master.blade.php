<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Koncret</title>
	<link rel="stylesheet" type="text/css" href="{{secure_asset('css/bulma.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	@yield('stylesheets')
</head>
<body>
	@include('partials.menu')
	@yield('content')

	@yield('javascripts')
</body>
</html>
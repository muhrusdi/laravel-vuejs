<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>

	<!-- <link rel="stylesheet" href="public{{ elixir('css/app.css') }}"> -->
	<link rel="stylesheet" href="public/css/app.css">
</head>
<body>
	<nav id="globalnav">
		<globalnav></globalnav>
	</nav>
	<div id="app-content">
		<main-content></main-content>
	</div>

	<script>
	    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
	</script>
	<!-- <script src="public{{ elixir('js/app.js') }}"></script> -->
	<script src="public/js/app.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ipaddress.fyi - All the IP addresses that you’ll need, from one simple source</title>

		<link rel="icon" type="image/png" href="/img/favicon.png">
		<link rel="stylesheet" href="css/app.css"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	</head>
	<body>
		<div id="app">
			@yield('content')
		</div>
	</body>

	<script type="text/javascript" src="js/app.js"></script>
	@yield('scripts')
</html>

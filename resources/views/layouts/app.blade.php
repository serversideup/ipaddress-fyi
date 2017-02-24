<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
				<title>ipaddress.fyi - Super simple IP Address list service for the Internet</title>
				<meta name="description" content="ipaddress.fyi is so simple to find the IP addresses of the most popular services, that even your grandmother will know how to use it.">
				<!-- Facebook Open Graph -->
				<meta property="og:locale" content="en_US"/>
				<meta property="og:type" content="product"/>
				<meta property="og:title" content="ipaddress.fyi - Super simple IP Address list service for the Internet"/>
				<meta property="og:description" content="ipaddress.fyi is so simple to find the IP addresses of the most popular services, that even your grandmother will know how to use it."/>
				<meta property="og:url" content="https://ipaddress.fyi"/>
				<meta property="og:site_name" content="ipaddress.fyi"/>
				<meta property="og:image" content="https://ipaddress.fyi/img/og-image.png"/>
				<meta property="og:image:width" content="1200"/>
				<meta property="og:image:height" content="630"/>
				<!-- Twitter Open Graph -->
				<meta name="twitter:card" content="summary_large_image"/>
				<meta name="twitter:description" content="ipaddress.fyi is so simple to find the IP addresses of the most popular services, that even your grandmother will know how to use it."/>
				<meta name="twitter:title" content="ipaddress.fyi - Super simple IP Address list service for the Internet"/>
				<meta name="twitter:site" content="@521dimensions"/>
				<meta name="twitter:image" content="https://ipaddress.fyi/img/og-image.png"/>
				<meta name="twitter:creator" content="@521dimensions"/>

		<link rel="icon" type="image/png" href="/img/favicon.png">
		<link rel="stylesheet" href="css/app.css"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-92602645-1', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div id="app">
			@yield('content')
		</div>
	</body>

	<script type="text/javascript" src="js/app.js"></script>
	@yield('scripts')
</html>

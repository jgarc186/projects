<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
	<style type="text/css">
		.is-complete: {
			text-decoration: line-through;
		}
	</style>
</head>
<body>
	<div class="container" style="margin-top: 40px">

		@yield('content')

	</div>
</body>
</html>
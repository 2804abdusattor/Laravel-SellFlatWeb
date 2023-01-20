<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="/css/app.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>@yield('title-block')</title>
</head>
<body  class="bg-light">
	@include('inc.header')

	@if(Request::is('/'))
		@include('inc.hero')
	@endif

	<div class="container mt-5">
		@include('inc.messages')

		<div class="row">
			<div class="col-8">
				@yield('content')
			</div>
			<div class="col-4">
				@include('inc.aside')
			</div>
		</div>
	</div>
	@include('inc.footer')
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Review</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

	<link rel="stylesheet" href="{{ asset('admin/css/nucleo-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/css/nucleo-svg.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/css/soft-ui-dashboard.css') }}" id="pagestyle">

	<script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
	<script src="{{ asset('admin/js/plugins/chartjs.min.js') }}"></script>
	<script src="{{ asset('admin/js/soft-ui-dashboard.min.js') }}"></script>

	<style>
		.hidden {
			display: none;
		}

		.c-pointer {
			cursor: pointer;
		}
	</style>
</head>

<body class="g-sidenav-show bg-gray-100">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/">
							<span class="nav-link-text ms-1">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/categories">
							<span class="nav-link-text ms-1">Categories</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/books">
							<span class="nav-link-text ms-1">Books</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/reviews">
							<span class="nav-link-text ms-1">Reviews</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>
</body>

</html>
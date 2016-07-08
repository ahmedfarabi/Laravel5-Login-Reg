<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login | Reg</title>
		<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		
	</head>
	<body>
		<div class="container">
			<ul class="nav nav-pills">
				@if(\Auth::check())
					<li>
						{{ link_to_route('logout', 'Logout') }}
					</li>
				@else
					<li>
						{{ link_to_route('login', 'Login') }}
					</li>
				@endif
				<li>
					{{ link_to_route('users.create', 'Register') }}
				</li>
			</ul>
			@yield('content')
		</div>
	</body>
	

</html>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cayambanan ES</title>
    <link href="{{ URL('assets/images/logo.jpg') }}" rel="icon">

    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
		<img src="{{ URL('assets/images/logo.jpg') }}" alt="Logo" height="60" width="60">
		<span class="text">Cayambanan ES</span>
	</a>
	<ul class="side-menu top">
		<li class="active">
			<a href="{{ route('dashboard') }}">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="{{ route('student.index') }}">
				<i class='bx bxs-shopping-bag-alt'></i>
				<span class="text">Student Management</span>
			</a>			
		</li>
		<li>
			<a href="{{ route('schools.index') }}">
				<i class='bx bxs-doughnut-chart'></i>
				<span class="text">School Information</span>
			</a>
		</li>
		{{-- <li>
			<a href="{{ route('syear.index') }}">
				<i class='bx bxs-calendar'></i>
				<span class="text">Manage School Year</span>
			</a>
		</li>
		<li>
			<a href="{{ route('issued.index') }}">
				<i class='bx bxs-group'></i>
				<span class="text">Issued Certificates</span>
			</a>
		</li> --}}
	</ul>
	<ul class="side-menu">
		<li>
			<a href="#">
				<i class='bx bxs-cog'></i>
				<span class="text">Settings</span>
			</a>
		</li>
		<li>
			<form action="{{ route('logout') }}" method="POST" class="logout">
				@csrf
				<button type="submit" class="logout-button">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</button>
			</form>
		</li>
	</ul>
</section>
</body>
</html>

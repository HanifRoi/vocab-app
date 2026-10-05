<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Vocabulary</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
	body {
		font-family: sans-serif;
		margin: 0;
		padding: 0;
		line-height: 1.6;
		background-color: #f9f9f9;
	}

	.navbar {
		background-color: #1f2937;
		padding: 12px 24px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.navbar .brand {
		color: white;
		text-decoration: none;
		font-weight: bold;
		font-size: 18px;
	}

	.navbar .nav-links {
		display: flex;
		gap: 15px;
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.navbar .nav-links a {
		text-decoration: none;
		color: #d1d5db;
		padding: 6px 12px;
		border-radius: 4px;
		transition: background-color 0.2s;
	}

	.navbar .nav-links a:hover {
		background-color: #374151;
		color: #ffffff;
	}

	.container {
		max-width: 1500px;
		margin: 20px auto;
		padding: 20px;
		background-color: #ffffff;
		border-radius: 6px;
		box-shadow: 0 1px 3px rgb(0, 0, 0, 1.0);
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-top: 10px;
	}

	th, td {
		border: 1px solid black;
		padding: 10px;
		text-align: left;
	}

	th {
		background-color: #f3f4f6;
	}
</style>
<body>
	<nav class="navbar">
		<a href="/" class="brand">Sistem Vocabulary</a>
		<ul class="nav-links">
			<li><a href="/">Dashboard</a></li>
			<li><a href="/japan">Belajar Jepang</a></li>
			<li><a href="/english">Belajar English</a></li>
		</ul>
	</nav>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>
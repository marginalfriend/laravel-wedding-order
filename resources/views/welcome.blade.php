<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('../css/app.css') }}" rel="stylesheet">
	@vite('resources/css/app.css')
	<title>Home</title>
</head>
<body>
	<h1 class="text-center p-5">Welcome to Wedding Organizer</h1>
	<div class="flex flex-row justify-around items-center">
		<a href="/orders">
			<button class="text-white border-0 bg-cyan-700 p-2 rounded-md hover:bg-cyan-500">
				Orders
			</button>
		</a>
		<a href="/packages">
			<button class="text-white border-0 bg-cyan-700 p-2 rounded-md hover:bg-cyan-500">
				Wedding Packages
			</button>
		</a>
		<a href="/customers">
			<button class="text-white border-0 bg-cyan-700 p-2 rounded-md hover:bg-cyan-500">
				Customers
			</button>
		</a>
	</div>
</body>
</html>
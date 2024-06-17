<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('../css/app.css') }}" rel="stylesheet">
	@vite('resources/css/app.css')
	<title>Wedding Packages</title>
</head>
<body>
	<h1 class="pb-4">Wedding Packages</h1>
	<div class="py-4">
		@if (session()->has('success'))
			<h3>
				{{session('success')}}
			</h3>
		@endif
	</div>
	<div class="py-4">
		<a href="{{route('packages.create')}}">
			<button>Create New Package</button>
		</a>
	</div>
	<table>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Actions</th>
		</tr>
		@foreach ($packages as $package)
			<tr>
				<td>{{ $package -> name }}</td>
				<td>{{ $package -> description}}</td>
				<td>$ {{ $package -> price}}</td>
				<td>
					<div class="flex flex-row justify-center gap-2 p-0 m-0">
						<a>
							<button>Edit</button>
						</a>
						<form method="post" action="{{route('packages.destroy', ['package' => $package])}}">
							@csrf
							@method('delete')
							<button type="submit" value="Delete" id="danger">Delete</button>
						</form>
					</div>
				</td>
			</tr>
		@endforeach
	</table>
</body>
</html>
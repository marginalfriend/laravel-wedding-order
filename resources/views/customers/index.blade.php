<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('../css/app.css') }}" rel="stylesheet">
	@vite('resources/css/app.css')
	<title>Customers</title>
</head>
<body>
	<h1 class="pb-4">Customers</h1>
	<div class="py-4">
		@if (session()->has('success'))
			<h3>
				{{session('success')}}
			</h3>
		@endif
	</div>
	<div class="py-4">
		<a href="{{route('customers.create')}}">
			<button>Create New Customer</button>
		</a>
	</div>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Actions</th>
		</tr>
		@foreach ($customers as $customer)
			<tr>
				<td>{{ $customer -> name }}</td>
				<td>{{ $customer -> email}}</td>
				<td>{{ $customer -> phone}}</td>
				<td>
					<div class="flex flex-row justify-center gap-2 p-0 m-0">
						<a href="{{route('customers.edit', ['customer' => $customer])}}">
							<button>Edit</button>
						</a>
						<form method="post" action="{{route('customers.destroy', ['customer' => $customer])}}">
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
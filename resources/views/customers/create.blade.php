<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create A Customer</title>
</head>
<body>
	<h1>Create A Customer</h1>
	<div>
		@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>
					{{$error}}
				</li>
			@endforeach
		</ul>
		@endif
	</div>
	
	<form method="POST" action="{{route('customers.store')}}">
		@csrf
		@method('POST')
		<div>
			<label>Name</label>
			<input type="text" name="name" placeholder="Name"/>
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" placeholder="Email"/>
		</div>
		<div>
			<label>Phone</label>
			<input type="text" name="phone" placeholder="Phone"/>
		</div>
		<div>
			<input type="submit" value="Save A New Customer" />
		</div>
	</form>
</body>
</html>
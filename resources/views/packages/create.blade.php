<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create A Package</title>
</head>
<body>
	<h1>Create A Package</h1>
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
	
	<form method="POST" action="{{route('packages.store')}}">
		@csrf
		@method('POST')
		<div>
			<label>Name</label>
			<input type="text" name="name" placeholder="Name"/>
		</div>
		<div>
			<label>Description</label>
			<input type="text" name="description" placeholder="Description"/>
		</div>
		<div>
			<label>Price</label>
			<input type="text" name="price" placeholder="Price"/>
		</div>
		<div>
			<input type="submit" value="Save A New Package" />
		</div>
	</form>
</body>
</html>
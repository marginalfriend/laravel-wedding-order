<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Package</title>
</head>
<body>
	<form method="POST" action="{{route('packages.update', ['package' => $package])}}">
		@csrf
		@method('PUT')
		<div>
			<label>Name</label>
			<input type="text" name="name" placeholder="Name" value="{{$package -> name}}"/>
		</div>
		<div>
			<label>Description</label>
			<input type="text" name="description" placeholder="Description" value="{{$package -> descript}}" />
		</div>
		<div>
			<label>Price</label>
			<input type="text" name="price" placeholder="Price" value="{{$package -> price}}" />
		</div>
		<div>
			<input type="submit" value="Save Changes" />
		</div>
	</form>
</body>
</html>
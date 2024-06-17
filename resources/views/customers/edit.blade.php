<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Customer</title>
</head>
<body>
	<form method="POST" action="{{route('customers.update', ['customer' => $customer])}}">
		@csrf
		@method('PUT')
		<div>
			<label>Name</label>
			<input type="text" name="name" placeholder="Name" value="{{$customer -> name}}"/>
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" placeholder="Email" value="{{$customer -> email}}" />
		</div>
		<div>
			<label>Phone</label>
			<input type="text" name="phone" placeholder="Phone" value="{{$customer -> phone}}" />
		</div>
		<div>
			<input type="submit" value="Save Changes" />
		</div>
	</form>
</body>
</html>
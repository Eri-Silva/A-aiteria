@extends('layout.template')


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HomePage</title>

	@section('content')
	
</head>
<body>
	<form action= "{{url('/login')}}" method="POST">
		@csrf
		<button>Login</button> </form>
	</form>
	
	<form action= "{{url('/register')}}" method="POST">
		@csrf
		<button>Register</button> </form>

		<h1>Home Page</h1>
	</body>
	</html>

	@endsection
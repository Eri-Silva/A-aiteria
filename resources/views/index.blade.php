@extends('layout.template')

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>

	@section('content')
	
</head>
<body>

	<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{url('/login')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Entrar</a>
    <a href="{{url('/register')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registra-se</a>
  </div>

	</body>
	</html>

	@endsection
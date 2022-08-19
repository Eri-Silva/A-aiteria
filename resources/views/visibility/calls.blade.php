@extends('layout.template')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pedidos</title>
	<link rel="stylesheet" type="text/css" href="/layout/style.css">
	@section('content')
</head>
<body>
	<h1>Monte seu açai</h1>
	<form action="{{url('/address')}}" method="POST">
		@csrf

		<fieldset>
			<legend> Tamanho </legend>
			<div>
				<input class="limited" type = "checkbox" id = "300g" name = "300g" value = "300g">
				<label for = "300g"> 300g </label>
				<input class="limited" type = "checkbox" id = "500g" name = "500g" value = "500g">
				<label for = "500g"> 500g </label>
				<input class="limited" type = "checkbox" id = "1kg" name = "1kg" value = "1kg">
				<label for = "1kg"> 1kg </label>
			</div>
		</fieldset>

		<fieldset>
			<legend> Sabor </legend>
			<div>
				<input type = "checkbox" id = "Tradicional" name = "Tradicional" value = "Tradicional">
				<label for = "Tradicional"> Tradicional </label>
				<input type = "checkbox" id = "Zero" name = "Zero" value = "Zero">
				<label for = "Zero"> Zero açucar </label>
				<input type = "checkbox" id = "Sonade" name = "Sonade" value = "Sonaide">
				<label for = "Sonade"> Sonaide </label>
			</div>
		</fieldset>

		<fieldset>
			<legend> Complementos </legend>
			<div>
				<input type = "checkbox" id = "Bis" name = "Bis" value = "Bis">
				<label for = "Bis"> Bis </label>
				<input type = "checkbox" id = "Amendoin" name = "Amendoin" value = "Amendoin">
				<label for = "Zero"> Amendoin </label>
				<input type = "checkbox" id = "Fini" name = "Fini" value = "Fini">
				<label for = "Fini"> Fini </label>
			</div>
		</fieldset>

		<button>Enviar</button>
	</form>


	<h1>Veja seus pedidos em andamento</h1>


</body>
</html>

@endsection
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
				<input class="sizes" type = "checkbox" id = "300g" name = "300g" value = "300g">
				<label for = "300g"> 300g </label>
				<input class="sizes" type = "checkbox" id = "500g" name = "500g" value = "500g">
				<label for = "500g"> 500g </label>
				<input class="sizes" type = "checkbox" id = "1kg" name = "1kg" value = "1kg">
				<label for = "1kg"> 1kg </label>
			</div>
		</fieldset>

		<fieldset>
			<legend> Sabor </legend>
			<div>
				<input class="flavors" type = "checkbox" id = "Tradicional" name = "Tradicional" value = "Tradicional">
				<label for = "Tradicional"> Tradicional </label>
				<input class="flavors" type = "checkbox" id = "Zero" name = "Zero" value = "Zero">
				<label for = "Zero"> Zero açucar </label>
				<input class="flavors" type = "checkbox" id = "Sonade" name = "Sonade" value = "Sonaide">
				<label for = "Sonade"> Sonaide </label>
			</div>
		</fieldset>

		<fieldset>
			<legend> Complementos </legend>
			<div>
				<input class="complements" type = "checkbox" id = "Bis" name = "Bis" value = "Bis">
				<label for = "Bis"> Bis </label>
				<input class="complements" type = "checkbox" id = "Amendoin" name = "Amendoin" value = "Amendoin">
				<label for = "Zero"> Amendoin </label>
				<input class="complements" type = "checkbox" id = "Fini" name = "Fini" value = "Fini">
				<label for = "Fini"> Fini </label>
			</div>
		</fieldset>

		<button>Enviar</button>
	</form>


	<h1>Veja seus pedidos em andamento</h1>


</body>

<script type="text/javascript">
(function(){
	"use strict";

	var marcados = 0;
	var verifyCheckeds = function($checks) {
		if( marcados>=2 ) {
			loop($checks, function($element) {
				$element.disabled = $element.checked ? '' : 'disabled';
			});
		} else {
			loop($checks, function($element) {
				$element.disabled = '';
			});
		}
	};
	var loop = function($elements, cb) {
		var max = $elements.length;
		while(max--) {
			cb($elements[max]);
		}
	}
	var count = function($element) {
		return $element.checked ? marcados + 1 : marcados - 1;
	}

	//class tamanho
	window.onload = function(){
		var $checks = document.querySelectorAll('input[class="sizes"]');
		loop($checks, function($element) {
			$element.onclick = function(){
				marcados = count(this);
				verifyCheckeds($checks);
			}
			if($element.checked) marcados = marcados + 1;
		});
		verifyCheckeds($checks);
	}

	//class sabores
	window.onload = function(){
		var $checks = document.querySelectorAll('input[class="flavors"]');
		loop($checks, function($element) {
			$element.onclick = function(){
				marcados = count(this);
				verifyCheckeds($checks);
			}
			if($element.checked) marcados = marcados + 1;
		});
		verifyCheckeds($checks);
	}

	//class complementos
	window.onload = function(){
		var $checks = document.querySelectorAll('input[class="complements"]');
		loop($checks, function($element) {
			$element.onclick = function(){
				marcados = count(this);
				verifyCheckeds($checks);
			}
			if($element.checked) marcados = marcados + 1;
		});
		verifyCheckeds($checks);
	}
}());
</script>

</html>

@endsection
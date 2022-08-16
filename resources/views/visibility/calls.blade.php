<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pedidos</title>
</head>
<body>
	<h1>Faça seu pedido</h1>
	<h1>Veja seus pedidos</h1>
	
	<form action="{{url('/address')}}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="digite algo">
		<button>Enviar</button>
	</form>
</body>
</html>
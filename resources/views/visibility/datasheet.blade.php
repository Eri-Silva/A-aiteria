<!DOCTYPE html>
<html>
<head>
	<title>Ficha técnica</title>
</head>
<body>
	<h1>Ficha do pedido final do cliente</h1>
	<form action="{{url('/calls')}}" method="POST">
		@csrf
		<button>Finalizar</button>
	</form>
</body>
</html>
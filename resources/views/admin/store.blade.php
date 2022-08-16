<!DOCTYPE html>
<html lang="en">
<head>
	<title>Historico de pedidos</title>
</head>
<body>
	<h1>Todos os pedidos finalizados</h1>

	<form action="{{url('/dashboard')}}" method="POST">
                @csrf
                
                <button>Voltar</button>
            </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard page</title>
</head>
<body>
	<h1>Painel de controle</h1>

	<form action="{{url('/store')}}" method="POST">
                @csrf
                
                <button>Historico de vendas</button>
            </form>
</body>
</html>
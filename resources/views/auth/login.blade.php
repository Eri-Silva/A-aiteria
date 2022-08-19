<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Faça Login</h1>


	<nav>
		<a>Faz login</a>
	</nav>

	<div>

		<form action="{{url('/calls')}}" method="POST">
			@csrf
			
			<label for="email">E-mail</label>
			<input type="email" value="email" name="email" placeholder="Digite seu e-mail">
			<label for="password">Senha</label>
			<input type="password" value="password" name="password" placeholder="Digite sua senha">

			<div> 
				<button> Enviar </button>
			</div>
		</form>
	</body>
	</html>
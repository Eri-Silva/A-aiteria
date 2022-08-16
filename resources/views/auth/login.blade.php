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
			<input type="text" name="username" placeholder="Digite seu nome" >
			<input type="password" name="password" placeholder="Digite sua senha">
			<input type="email" name="email" placeholder="Digite seu e-mail">
			<div> 
				<button> Enviar </button>
			</div>
		</form>
	</body>
	</html>
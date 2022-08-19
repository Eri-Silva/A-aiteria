<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login do adm</title>
</head>
<body>
    <h1>Pagina de login administrativo</h1>
        
            <a>Login admin</a>


            <form action="{{url('/dashboard')}}" method="POST">
                @csrf
                <label for="email">E-mail</label>
			<input type="email" value="email" name="email" placeholder="Digite seu e-mail">
			<label for="password">Senha</label>
			<input type="password" value="password" name="password" placeholder="Digite sua senha">
			
                <button>Entrar</button>
            </form>

</body>
</html>
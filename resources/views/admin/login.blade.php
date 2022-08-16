<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login do adm</title>
</head>
<body>
    <h1>Pagina de login administrativo</h1>
        
            <a>Login</a>


            <form action="{{url('/dashboard')}}" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Digite seu usuário">
                <input type="password" name="password" placeholder="Digite sua senha"> 
                <button>Entrar</button>
            </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
</head>
<body>
    <h1>Faça seu registro</h1>

    <form action="{{url('/register')}}" method="POST">
       @csrf
       
       <form action="{{url('/calls')}}" method="POST">
            @csrf
            
            <label for="name">Nome</label>
            <input type="text" value="name" name="username" placeholder="Digite seu nome" >
            <label for="email">E-mail</label>
            <input type="email" value="email" name="email" placeholder="Digite seu e-mail">
            <label for="password">Senha</label>
            <input type="password" value="password" name="password" placeholder="Digite sua senha">

            <div> 
                <button> Enviar </button>
            </div>

        </div>
    </div>
</form>
</body>
</html>
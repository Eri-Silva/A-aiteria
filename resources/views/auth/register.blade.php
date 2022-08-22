<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>
<body>
   <!--  <h1>Faça seu registro</h1>

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
</form> -->

<div id="cadastro">
        <form method="post" action="{{url('/calls')}}"> 
            @csrf
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="/"> Ir para Login </a>
          </p>
        </form>
      </div>
</body>
</html>
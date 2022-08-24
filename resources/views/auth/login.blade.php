<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>
<body>
	<!-- <h1>Faça Login</h1>


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
		</form> -->

		<div id="login">
        <form method="post" action="{{url('/calls')}}"> 
        	@csrf
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login"  type="password" placeholder="ex. senha" /> 
          </p>
           <!-- required="required" -->
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="/">Cadastre-se</a>
          </p>
        </form>
      </div>
	</body>
	</html>
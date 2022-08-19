<!DOCTYPE html>
<html lang="en">
<head>
	<title>Endereço</title>
</head>

<body>
	<h1>Forneça o local de entrega</h1>
	<form action="{{url('/datasheet')}}" method="POST">
		@csrf

		<fieldset>
			<div>
				<label for="nome">Nome Completo</label>
				<input type="text" id="nome" placeholder="Nome Completo" name="nome" value="nome" />
				
				<label for="fone">Telefone</label>
				<input type="tel" id="fone" placeholder="(xx)xx-xx-xx-xx" name="fone"  value="fone" />

				<label for="bairro">Bairro</label>
				<input type="text" id="bairro" placeholder="Bairro" name="bairro"  value="bairro"/>
				
				<label for="rua">Rua</label>
				<input type="text" id="rua" placeholder="Rua" name="rua"  value="rua" />
				
				<label for="numero">numero</label>
				<input type="number" id="numero" placeholder="Numero" name="numero"  value="numero" />

				<button>Enviar</button>
				


			</div>
		</fieldset>  
	</form>



</body>
</html>
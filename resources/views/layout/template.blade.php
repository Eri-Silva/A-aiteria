
<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->

@yield('content')

<!-- <div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Entrar</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registra-se</a>
  </div> -->

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">LEME açaiteria</h1>
  <!-- <p class="w3-xlarge">Template by w3.css</p> -->
  <!-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button> -->
</header>

@yield('content_calls')

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Melhor açai da cidade</h1>
      <h5 class="w3-padding-32">Venha fazer uma visita</h5>

      <p class="w3-text-grey">Está pensando em tomar aquele delicioso açaí? 
        Então passa no (Nome da loja). E confira a melhor qualidade e 
        o menor preço da cidade! Desfrute da nossa variedade em adicionais, 
        e agora com uma super novidade pra você açaizeiro de plantão. 
        Todo dia tem um açaí com desconto especial. 
        É isso mesmo! Todo dia o seu açaí preferido ainda 
        mais barato.Estamos localizados na (Nome da rua) 
        numero (00).Funcionamos de terça a domingo das 17 às 22 horas. 
        Informações pelo Whatsapp: 0 0000 0000.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Dinheiro não compra felicidade, mas compra açaí</h1>
      <h5 class="w3-padding-32">Não deixe para depois o Açaí que você 
        pode comer agora</h5>

      <p class="w3-text-grey">Aqui na (Nome da loja) tem promoção todo 
        dia! Peça pelo Whatsapp: 0 0000 0000. Funcionamos todos os
         dias, das 18 horas à meia noite. Lanches, sorvetes, açaí 
         e geladinho gourmet. Venha você também para (Nome da Loja).
          Peça pelo Whatsapp: 0 0000 0000. (Nome da loja), localizada 
          na (Nome da rua) numero (00) em sua cidade.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Faça seu pedido e se delicie com nosso açai</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Usado para alternar o menu em telas pequenas ao clicar no botão de menu
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>

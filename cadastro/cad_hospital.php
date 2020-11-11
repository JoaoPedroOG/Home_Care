<!DOCTYPE html>
<html lang="pt">
<title> Cadastrar Hospital</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/homepage.css">
<link rel="icon" type="image/png" href="../img/logo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src = "../js/mask.js"></script>
<style>
body {font-family: "Lato", sans-serif}
</style>

<body class="w3-aqua w3-white">
<?php
  if(isset($_GET["e"])){
      if($_GET["e"]== 1){
        echo '
                <script language = "javascript" type = "text/javascript">

                  document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("invalid").textContent = "Estes dados de usuário já existem";
                  });

                </script>

            ';
      }
      else if($_GET["e"]==2){
        echo '
                <script language = "javascript" type = "text/javascript">
    
                  document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("valid").textContent = "Cadastro com sucesso"
                  });
    
                </script>
    
            ';
      }
    }
?>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-padding-large">HOME&CARE</a>
	<a href="../homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MENU</a>
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="../homepage.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MENU</a>
</div>
<!-- Page Content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
    <div class="w3-container w3-aqua  w3-padding-32"></div>
    <div class=" w3-container w3-content  w3-center-left w3-padding-16 w3-red" style="max-width:500px">
    <h2 class=" w3-center w3-red "><i class="fa fa-hospital-o"> CADASTRO DE HOSPITAL</h2></i>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-branco " style="max-width:500px">
        <form name="cad_hosp" method="POST" action="../cadastro/cad.php?t=3"> 
        <p><label><i class="fa fa-id-card-o"></i> CNPJ</label></p>  
        <input class="w3-input w3-border" id="InputCNPJ" name="cnpj_hosp" type="text" style="max-width:500px" placeholder="CNPJ" required name="cnpj">
        <p><label><i class="fa fa-id-card-o"></i> CNES</label></p>  
        <input class="w3-input w3-border" id="InputCNES" name="cnes_hosp" type="text" style="max-width:500px" placeholder="CNES" required name="cnes">
        <p><label><i class="fa fa-hospital-o"></i> Nome do Hospital</label></p>  
        <input class="w3-input w3-border" name="nome_hosp" type="text" style="max-width:500px" placeholder="Nome do Hospital" required name="nome" maxlength="60">
        <p><label><i class="fa fa-phone"></i> Telefone</label></p>  
        <input class="w3-input w3-border" id="InputFone" name="fone_hosp" type="text" style="max-width:500px" placeholder="Telefone" required name="fone">
        <p><label><i class="fa fa-vcard-o"></i> CEP</label></p>  
        <input class="w3-input w3-border" id="InputCEP" name="cep_hosp" type="text" style="max-width:500px" placeholder="CEP" required name="cep">
        <p><label><i class="fa fa-map-marker"></i> Endereço</label></p>  
        <input class="w3-input w3-border"  name="endereco_hosp" type="text" style="max-width:500px" placeholder="Endereço" required name="endereco">
        <p><label><i class="fa fa-home"></i> Número</label></p>  
        <input class="w3-input w3-border" id="InputN" name="num_hosp" type="text" style="max-width:500px" placeholder="Número" required name="num">
        <p><label><i class="fa fa-key"></i> Senha</label></p>
        <input class="w3-input w3-border" name="senha_hosp" type="password" style="max-width:500px" placeholder="Senha" required name="senha">
        <h5 class="w3-vermelho w3-left" id="invalid"></h5>
        <h5 class="w3-green w3-left" id="valid"></h5>
        <button type="submit" style="max-width:500px" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-center">ENTRAR <i class="fa fa-check"></i></button></form>
        <a href="../homepage.php"><button class="w3-button w3-red w3-section"><i class="fa fa-mail-reply"></i> Voltar</button></a>
    </div>
    <div class="w3-container w3-aqua  w3-padding-32"></div>
</div> 
<script>
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
<!DOCTYPE html>
<html lang="pt">
<title> Cadastrar Paciente</title>
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
    <h2 class=" w3-center w3-red "><i class="fa fa-user-circle"> CADASTRO DE PACIENTE</h2></i>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-branco " style="max-width:500px">
        <form name="cad_pac" method="POST" action="../cadastro/cad.php?t=1"> 
        <p><label><i class="fa fa-id-card-o"></i> RG</label></p>  
        <input class="w3-input w3-border" id="InputRG" name="rg_pac" type="text" style="max-width:500px" placeholder="RG" required name="rg">
        <p><label><i class="fa fa-user"></i> Nome</label></p>  
        <input class="w3-input w3-border" name="nome_pac" type="text" style="max-width:500px" placeholder="Nome" required name="nome" maxlength="60">
        <p><label><i class="fa fa-birthday-cake"></i> Data de Nascimento</label></p>  
        <input class="w3-input w3-border" id="InputDN" name="nasc_pac" type="text" style="max-width:500px" placeholder="Data de Nascimento" required name="nasc">
        <p><label><i class="fa fa-phone"></i> Telefone</label></p>  
        <input class="w3-input w3-border" id="InputFone" name="fone_pac" type="text" style="max-width:500px" placeholder="Telefone" required name="fone">
        <p><label><i class="fa fa-id-card-o"></i> CPF</label></p>  
        <input class="w3-input w3-border" id="InputCPF" name="cpf_pac" type="text" style="max-width:500px" placeholder="CPF" required name="cpf">
        <p><label><i class="fa fa-map-pin"></i> Cidade</label></p>  
        <input class="w3-input w3-border"  name="cidade_pac" type="text" style="max-width:500px" placeholder="Cidade" required name="cidade" maxlength="60">
        <p><label><i class="fa fa-map-signs"></i> Estado (Sigla)</label></p>  
        <input class="w3-input w3-border" name="estado_pac" type="text" style="max-width:500px" placeholder="Estado (Sigla)" required name="estado" maxlength="2">
        <p><label><i class="fa fa-map-marker"></i> Endereço</label></p>  
        <input class="w3-input w3-border"  name="endereco_pac" type="text" style="max-width:500px" placeholder="Endereço" required name="endereco">
        <p><label><i class="fa fa-home"></i> Número</label></p>  
        <input class="w3-input w3-border" id="InputN" name="num_pac" type="text" style="max-width:500px" placeholder="Número" required name="num">
        <p><label><i class="fa fa-vcard-o"></i> CEP</label></p>  
        <input class="w3-input w3-border" id="InputCEP" name="cep_pac" type="text" style="max-width:500px" placeholder="CEP" required name="cep">
        <p><label><i class="fa fa-key"></i> Senha</label></p>
        <input class="w3-input w3-border" name="senha_pac" type="password" style="max-width:500px" placeholder="Senha" required name="senha">
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
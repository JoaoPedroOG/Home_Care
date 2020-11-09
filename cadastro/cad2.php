<!DOCTYPE html>
<html lang="pt">
<title>Home&Care</title>
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
ini_set('default_charset', 'UTF-8');

$crm= $_POST["crm"];
$uf= $_POST["uf"];
$nome= $_POST["nome"];
$data_nasc= $_POST["data_nasc"];
$rg= $_POST["rg"];
$cpf= $_POST["cpf"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$senha= $_POST["senha"];

include '../php/config.php';
include '../php/mysqlexecuta.php';

$con = conectar();

$sql = "INSERT INTO medico(crm, uf, nome, data_nasc, rg, cpf, cidade, estado, senha) 
VALUES('$crm', '$uf', '$nome', '$data_nasc', '$rg', '$cpf', '$cidade', '$estado', '$senha')";

$res = mysqlexecuta($con,$sql);

?>
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
    <h2 class=" w3-center w3-red "><i class="fa fa-user-md"> CADASTRO DE MÉDICO</h2></i>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-branco " style="max-width:500px">
        <form name="cad_pac" method="POST" action="../cadastro/cad2.php"> <!---->
        <p><label><i class="fa fa-id-card-o"></i> CRM</label></p>  
        <input class="w3-input w3-border"  id="InputCRM" name="crm" type="text" style="max-width:500px" placeholder="CRM" required name="crm">
        <p><label><i class="fa fa-map-o"></i> UF</label></p>  
        <input class="w3-input w3-border"  name="uf" type="text" style="max-width:500px" placeholder="UF" required name="uf" maxlength="2">
        <p><label><i class="fa fa-map-o"></i> Nome</label></p>  
        <input class="w3-input w3-border"  name="nome" type="text" style="max-width:500px" placeholder="Nome" required name="nome" maxlength="60">
        <p><label><i class="fa fa-birthday-cake"></i> Data de Nascimento</label></p>  
        <input class="w3-input w3-border"  id="InputDN" name="data_nasc" type="text" style="max-width:500px" placeholder="Data de Nascimento" required name="nasc">
        <p><label><i class="fa fa-id-card-o"></i> RG</label></p>  
        <input class="w3-input w3-border"  id="InputRG" name="rg" type="text" style="max-width:500px" placeholder="RG" required name="rg">
        <p><label><i class="fa fa-id-card-o"></i> CPF</label></p>  
        <input class="w3-input w3-border"  id="InputCPF" name="cpf" type="text" style="max-width:500px" placeholder="CPF" required name="cpf">
        <p><label><i class="fa fa-map-pin"></i> Cidade</label></p>  
        <input class="w3-input w3-border"  name="cidade" type="text" style="max-width:500px" placeholder="Cidade" required name="cidade" maxlength="60">
        <p><label><i class="fa fa-map-signs"></i> Estado (Sigla)</label></p>  
        <input class="w3-input w3-border"  name="estado" type="text" style="max-width:500px" placeholder="Estado (Sigla)" required name="estado" maxlength="2">
        <p><label><i class="fa fa-key"></i> Senha</label></p>
        <input class="w3-input w3-border" name="senha" type="password" style="max-width:500px" placeholder="Senha" required name="senha">
        <h5 class="w3-green w3-left" id="valid" > </h5>
        <button type="submit" style="max-width:500px" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-center">ENTRAR <i class="fa fa-check"></i></button></form>
        <a href="../homepage.php"><button class="w3-button w3-red w3-section"><i class="fa fa-mail-reply"></i> Voltar</button></a>
    </div>
    <div class="w3-container w3-aqua  w3-padding-32"></div>
</div> 
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById("valid").textContent = 'Cadastrado com Sucesso';
        });
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
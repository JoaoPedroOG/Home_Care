<!DOCTYPE html>
<html lang="pt">
<title>Home&Care</title>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/homepage.css">
<link rel="icon" type="image/png" href="img/logo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src = "js/mask.js"></script>
<style>
body {font-family: "Lato", sans-serif}
</style>

<body class="w3-agua w3-white">
<?php
    ini_set('default_charset', 'UTF-8');
    if(isset($_GET["erro"])){
      if($_GET["erro"]== 1){
        echo '
                <script language = "javascript" type = "text/javascript">
                  $(document).ready(function(){

                    $("#altera_hosp").css("display", "block");

                  });
                  document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("valid").textContent = "Dados alterados";
                  });
  
                </script>
  
            ';
      }
      else if($_GET["erro"]==2){
        echo '
                <script language = "javascript" type = "text/javascript">
                  $(document).ready(function(){

                    $("#altera_hosp").css("display", "block");

                  });
                  document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("invalid").textContent = "Houve um erro ao alterar"
                  });
    
                </script>
    
            ';
      }
    }
    session_start();
    include 'php/config.php';
    include 'php/mysqlexecuta.php';
    $con = conectar ();
    $cnes = $_SESSION['cnes'];
    $u = mysqlexecuta($con,"SELECT * FROM hospital where cnes like '$cnes'");
    $user = mysqli_fetch_assoc($u);
    $id_hosp = $user['cod_hospital'];

    $c = mysqlexecuta($con,"SELECT medico.* FROM medico
    inner join hospital_medico
    on medico.cod_medico = hospital_medico.cod_medico
    inner join hospital
    on hospital_medico.cod_hospital = hospital.cod_hospital
    where hospital.cod_hospital like '$id_hosp'");
?>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-padding-large">HOME&CARE</a>
	<a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MENU</a>
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MENU</a>
</div>

<div class="w3-container w3-agua w3-padding-32 "> </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-red w3-borda w3-border-red" style="max-width:1280px">
        <h1 class="w3-center"><i class="fa fa-hospital-o"></i> <?php echo $user['nome']; ?> </h1>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-light-grey w3-borda2 w3-border-red" style="max-width:1280px">
        <h3 class="w3-opacity w3-center">Este é o menu, onde você pode gerenciar médicos e visualizar seus dados.
          <p>  O que deseja fazer ?
        </h3><br>
        
        <div class="w3-content w3-container w3-borda3 w3-border-red w3-center" style="max-width:1280px">
            <h2 class="w3-center-left">Médicos</h2><hr>
            <p><h3 class="w3-left w3-half" >Cadastrar médico
            <p><a href = "cadastro/cad_medico.php" style="text-decoration:none"><button class=" w3-button w3-red w3-margin-bottom">CADASTRAR</a>
            </h3>
            <p><h3 class="w3-left w3-half" >Visualizar médicos cadastrados
            <p><button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('visualizar_tm').style.display='block'" >VISUALIZAR
            </h3><br>
        </div><br>
        <div class="w3-content w3-container w3-borda3 w3-border-red w3-center-left" style="max-width:1280px"><h2>Informações sobre o hospital</h1>
           <hr><h4 class="w3-left">
            Nome: <?php echo $user['nome']; ?></p>
            CNPJ: <?php echo $user['cnpj']; ?>
            <p>Telefone: <?php echo $user['telefone']; ?>
            <p>Endereço: <?php echo $user['endereco']; ?>
            <p>CEP: <?php echo $user['cep']; ?>
            <p>CNES: <?php echo $user['cnes']; ?>
            <p>Número: <?php echo $user['numero']; ?><hr>
            <p><button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('altera_hosp').style.display='block'" >ALTERAR DADOS
            </h4>
        </div>
    </div>
</div>
<!-- Ticket Modal visualizar-->
<div id="visualizar_tm" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('visualizar_tm').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">X</span>
      <h2 class="w3-wide"><i class="fa fa-file-o w3-margin-right"></i>Dados da consulta</h2>
    </header>
    <div class="w3-container w3-preto">
        <h4>
        <?php
            function SepararData($DataJunta)
              {
          
                  list($ano, $mes, $dia) = explode('-', $DataJunta);
          
                  $Data = $dia."/".$mes."/".$ano;
          
                  return $Data;
              }
             while ($consulta = mysqli_fetch_assoc($c)){
              $consulta['data_nasc']=SepararData($consulta['data_nasc']);    
        ?>
        <p>Nome: <?php echo $consulta['nome']; ?></p>
        <p><label>CRM: <?php echo $consulta['crm']; ?></label></p>
        <p><label>RG: <?php echo $consulta['rg']; ?></label></p>
        <p><label>CPF: <?php echo $consulta['cpf']; ?></label></p>
        <p><label>Data de nascimento: <?php  echo $consulta['data_nasc']; ?></label></p>
        <?php
        $nome_medico = $consulta['nome'];
        $m = mysqlexecuta($con,"SELECT especialidade.nome_esp FROM especialidade
        inner join medico_especialidade
        on especialidade.cod_esp = medico_especialidade.cod_esp
        inner join medico
        on medico_especialidade.cod_medico = medico.cod_medico
        where medico.nome like '$nome_medico'");
        $med = mysqli_fetch_assoc($m); ?>
        <p><label>Especialidade: <?php echo $med['nome_esp']; ?> <hr> <?php }?>
    <p><button class="w3-button w3-red w3-section" onclick="document.getElementById('visualizar_tm').style.display='none'">Fechar </button>
    </h4></div>
  </div>
</div>

<!-- Ticket Modal dados alterar-->
<div id="altera_hosp" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:550px">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
    <span onclick=limpa_e()
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-address-card-o w3-margin-right"></i>Alteração de Dados</h2>
    </header>
    <div class="w3-container w3-preto">
      
      <h4><form name="alt_hosp" method="POST" action="alteracao/alt.php?t=hospital">
          <p><label><i class="fa fa-user"></i> Nome:</label>
          <input type="text" name="nome" style="max-width:400px"  class="w3-inpute w3-border" value="<?php echo $user['nome'] ?> "  placeholder="Nome" required name="Nome"></p>   
          <p><label><i class="fa fa-id-card-o"></i> CNPJ:</label>
          <input class="w3-inpute w3-border" style="max-width:250px" disabled id="InputCNPJ" name="cnpj" value=<?php echo $user['cnpj']  ?> type="text" placeholder="00.000.000/0000-00" required name="cnpj"></p>        
          <p><label><i class="fa fa-phone"></i> Telefone: </label>
          <input class="w3-inpute w3-border" style="max-width:200px" id="InputFone" name="fone" value="<?php echo $user['telefone']  ?>" type="text" placeholder="00 00000-0000" required name="Telefone"></p>      
          <p><label><i class="fa fa-map-signs"></i> Endereço: </label>
          <input class="w3-inpute w3-border" style="max-width:350px" id="Endereco" name="endereco" value="<?php echo $user['endereco']  ?>" type="text" placeholder="Nome da rua" required name="endereco"></p>
          <p><label><i class="fa fa-map-pin"></i> CEP: </label>
          <input class="w3-inpute w3-border" style="max-width:200px" id="InputCEP" name="cep" value="<?php echo $user['cep'];  ?>" type="text" placeholder="00000-000" required name="CEP"></p>
          <p><label><i class="fa fa-map-signs"></i> CNES: </label> 
          <input class="w3-inpute w3-border" disabled style="max-width:150px" id="InputCNES" name="cnes" value="<?php echo $user['cnes'] ?>" type="text" placeholder="0000000" required name="cnes"></p>
          <p><label><i class="fa fa-map-marker"></i> Número: </label>
          <input class="w3-inpute w3-border" style="max-width:150px" id="InputN" name="num" value="<?php echo $user['numero']  ?>" type="text" placeholder="0000" required name="Número"></p>
          <h4 class="w3-vermelho w3-left" id="invalid"></h4>
          <h4 class="w3-green w3-left" id="valid"></h4>
          <button type="submit" style="max-width:550px" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-center">ALTERAR <i class="fa fa-check"></i></button>
      </form>
      <button class="w3-button w3-red w3-section w3-left" onclick=limpa_e()>Fechar</button></h4>
    </div>
  </div>
</div>

<script>
  function limpa_e(){
    document.getElementById('altera_hosp').style.display='none';
    document.getElementById("invalid").textContent = "";
    document.getElementById("valid").textContent = "";
  }
</script>
</body>
</html>
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
    if(isset($_GET["e"])){
      if($_GET["e"]== 6){
        echo '
                <script language = "javascript" type = "text/javascript">
                  $(document).ready(function(){

                    $("#consulta_tm").css("display", "block");

                  });
                  document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("invalid").textContent = "Essa consulta já foi marcada";
                  });
  
                </script>
  
            ';
      }
      else if($_GET["e"]==12){
        echo '
                <script language = "javascript" type = "text/javascript">
                  $(document).ready(function(){

                    $("#consulta_tm").css("display", "block");

                  });
                  document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("valid").textContent = "Consulta marcada, agora é só esperar"
                  });
    
                </script>
    
            ';
      }
    }

    session_start();
    include 'php/config.php';
    include 'php/mysqlexecuta.php';
    $con = conectar ();
    $cpf = $_SESSION['cpf'];

    $u = mysqlexecuta($con,"SELECT * FROM paciente where cpf like '$cpf'");
    $user = mysqli_fetch_assoc($u);
    $id_pac = $user['cod_paciente'];

    $c = mysqlexecuta($con,"SELECT * FROM consulta where cod_paciente like '$id_pac'");
?>
<div class="w3-container w3-agua w3-padding-32 "> </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-red w3-borda w3-border-red" style="max-width:1280px">
        <h1 class="w3-center"> Bem vindo, <?php echo $user['nome']; ?> </h1>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-light-grey w3-borda2 w3-border-red" style="max-width:1280px">
        <h3 class="w3-opacity w3-center">Este é o menu, onde você pode agendar consultas e gerenciar seus dados.
          <p>  O que deseja fazer ?
        </h3><br>
        
        <div class="w3-content w3-container w3-borda3 w3-border-red w3-center" style="max-width:1280px">
            <h2 class="w3-center-left">Consultas</h2><hr>
            <p><h3 class="w3-left w3-half" >Solicitar consulta
            <p><button class=" w3-button w3-red w3-margin-bottom" onclick="document.getElementById('consulta_tm').style.display='block'">AGENDAR
            </h3>
            <p><h3 class="w3-left w3-half" >Visualizar consultas
            <p><button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('visualizar_tm').style.display='block'" >VISUALIZAR
            </h3><br>
        </div><br>
        <div class="w3-content w3-container w3-borda3 w3-border-red w3-center-left" style="max-width:1280px"><h2>Informações sobre o usuário</h1>
           <hr><h4 class="w3-left">
            Nome: <?php echo $user['nome']; ?></p>
            CPF: <?php echo $user['cpf']; ?>
            <p>Data de nascimento: <?php echo $user['data_nasc']; ?>
            <p>Telefone: <?php echo $user['fone']; ?>
            <p>Endereço: <?php echo $user['endereco']; ?>
            <p>Número: <?php echo $user['numero']; ?><hr>
            <p><button class="w3-button w3-red w3-margin-bottom" >ALTERAR DADOS
            </h4>
        </div>
    </div>
</div>
<!-- Ticket Modal visualizar-->
<div id="visualizar_tm" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('visualizar_tm').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-file-o w3-margin-right"></i>Dados da consulta</h2>
    </header>
    <div class="w3-container w3-preto">
        <h4>
        <?php
            while ($consulta = mysqli_fetch_assoc($c)){
        ?>
        <p>Endereço:<?php echo $consulta['endereco_consulta']; ?>
        <p><label>Data:<?php echo $consulta['data_consulta']; ?>
        <p><label>Horário:<?php echo $consulta['horario_consulta'];
        $id_med = $consulta['cod_medico'];
        $m = mysqlexecuta($con,"SELECT * FROM medico where cod_medico like '$id_med'");
        $med = mysqli_fetch_assoc($m); ?>
        <p><label>Sintomas:<?php echo $consulta['diagnostico']; ?>
        <p><label>Nome do Médico:<?php echo $med['nome'];?><hr> <?php }?>
    <p><button class="w3-button w3-red w3-section" onclick="document.getElementById('visualizar_tm').style.display='none'">Fechar </button>
    </h4></div>
  </div>
</div>

<!-- Ticket Modal consulta criar-->
<div id="consulta_tm" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('consulta_tm').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-stethoscope w3-margin-right"></i>Agendamento de Consulta</h2>
    </header>
    <div class="w3-container w3-preto">
    <h4>
      <form name="entra_pac" method="POST" action="cadastro/cad_consulta.php">
      <p><label><i class="fa fa-user-md"></i> Nome Médico</label></p> 
      <select class="w3-input w3-border" id="Medico" name="nome_medico" style="max-width:500px" >
      <option> Selecione </option>
      <?php 
      $p= mysqlexecuta($con,"SELECT nome FROM medico");
      while($pesq = mysqli_fetch_array($p)){ 
        ?><option> <?php echo $pesq['nome']; ?> </option>
      <?php
      }
      ?>
      </select>
      <p><label><i class="fa fa-home"></i> Endereço da consulta</label></p>  
      <input class="w3-input w3-border " id="Endereco" name="endereco_consulta" type="text" placeholder="Nome da rua, número" required name="endereco" style="max-width:500px" maxlength="60">
      <p><label><i class="fa fa-calendar"></i> Data da consulta</label></p>  
      <input class="w3-input w3-border" id="InputDN" name="data_consulta" type="text" style="max-width:500px" placeholder="DD/MM/AAAA" required name="Nascimento">
	  <p><label><i class="fa fa-clock-o"></i> Horário da consulta</label></p>  
      <input class="w3-input w3-border" id="InputHora" name="horario_consulta" type="text" style="max-width:500px" placeholder="__:__" required name="Nascimento" maxlength="5">
	  <p><label><i class="fa fa-heart"></i> Sintomas</label></p>  
      <input class="w3-input w3-border" id="InputDI" name="diagnostico" type="text" style="max-width:500px" placeholder="Sintomas" required name="Nascimento" maxlength="60">
      <p><h5 class="w3-vermelho w3-left" id="invalid"> </h5> 
      <p><h5 class="w3-verde w3-left" id="valid">  </h5> 
      <button type="submit" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-left">AGENDAR</button></form>
      <button class="w3-button w3-red w3-section w3-left" onclick=limpa_e()>Fechar</button></h4>
    </div>
  </div>
</div>
<script>
  function limpa_e(){
    document.getElementById('consulta_tm').style.display='none'
    document.getElementById("invalid").textContent = "";
    document.getElementById("valid").textContent = "";
  }
</script>
</body>
</html>
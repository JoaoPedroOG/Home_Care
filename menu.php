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
<body class="w3-agua ">
<?php
    function SepararData($DataJunta)
    {
        list($ano, $mes, $dia) = explode('-', $DataJunta);

        $Data = $dia."/".$mes."/".$ano;

        return $Data;
    }
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
                    document.getElementById("valid").textContent = "Consulta marcada, agora é só esperar";
                  });
    
                </script>
    
            ';
      }
    }
    if(isset($_GET["erro"])){
        if($_GET["erro"]==1){
          echo '
                  <script language = "javascript" type = "text/javascript">
                    $(document).ready(function(){

                      $("#altera_dados").css("display", "block");

                    });
                    document.addEventListener("DOMContentLoaded", function(event) {
                      document.getElementById("alterado").textContent = "Dado alterado";
                    });
      
                  </script>
      
              ';
        }
        else if($_GET["erro"]==2){
          echo '
                  <script language = "javascript" type = "text/javascript">
                    $(document).ready(function(){

                      $("#altera_dados").css("display", "block");

                    });
                    document.addEventListener("DOMContentLoaded", function(event) {
                      document.getElementById("Nalterado").textContent = "Houve um erro ao alterar";
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
    $user2['data_nasc']=SepararData($user['data_nasc']);   

    $c = mysqlexecuta($con,"SELECT * FROM consulta where cod_paciente like '$id_pac' and status like 'Aberto'");

?>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-padding-large">HOME&CARE</a>
    <a href="homepage.php" class="w3-right  w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-power-off"> </i> SAIR</a>
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MENU</a>
</div>
<div class="w3-container w3-agua w3-padding-32 "> </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-red w3-borda w3-border-red" style="max-width:1280px">
        <h1 class="w3-center"> Bem vindo, <?php echo $user['nome']; ?> </h1>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-light-grey w3-borda2 w3-border-red" style="max-width:1280px">
        <h3 class="w3-opacity w3-center">Este é o menu, onde você pode gerenciar consultas e visualizar seus dados.
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
            <p>Data de nascimento: <?php echo $user2['data_nasc']; ?>
            <p>Telefone: <?php echo $user['fone']; ?>
            <p>Endereço: <?php echo $user['endereco']; ?>
            <p>Número: <?php echo $user['numero']; ?><hr>
            <p><button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('altera_dados').style.display='block'" >ALTERAR DADOS
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
            
            
            while ($consulta = mysqli_fetch_array($c)){
              $consulta['data_consulta']=SepararData($consulta['data_consulta']);
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
  <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:500px">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
    <span onclick=limpa_e()
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-stethoscope w3-margin-right"></i>Agendamento de Consulta</h2>
    </header>
    <div class="w3-container w3-preto">
    <h4>
      <form name="cons_cria" method="POST" action="cadastro/cad_consulta.php">
      <p><label><i class="fa fa-user-md"></i> Nome Médico</label></p> 
      <select class="w3-select w3-border" id="Medico" name="nome_medico" style="max-width:500px" >
      <option> Selecione </option>
      <?php 
      $nome_medico = $pesq['nome'];
      $g = mysqlexecuta($con,"SELECT especialidade.nome_esp FROM especialidade
        inner join medico_especialidade
        on especialidade.cod_esp = medico_especialidade.cod_esp
        inner join medico
        on medico_especialidade.cod_medico = medico.cod_medico
        where medico.nome like '$nome_medico'");
      $geeg = mysqli_fetch_array($g);

      $p= mysqlexecuta($con,"SELECT nome FROM medico");
      while($pesq = mysqli_fetch_array($p)){ 
        ?><option> <?php
        $nome_medico = $pesq['nome'];
      $g = mysqlexecuta($con,"SELECT especialidade.nome_esp FROM especialidade
        inner join medico_especialidade
        on especialidade.cod_esp = medico_especialidade.cod_esp
        inner join medico
        on medico_especialidade.cod_medico = medico.cod_medico
        where medico.nome like '$nome_medico'");
      $geeg = mysqli_fetch_array($g);
      echo $pesq['nome'] . " - ". $geeg['nome_esp'] ;
      ?> </option>
      <?php
      }
      ?>
      </select>
      <p><label><i class="fa fa-home"></i> Endereço da consulta</label></p>  
      <input class="w3-input w3-border " id="Endereco" name="endereco_consulta" type="text" placeholder="Nome da rua, número" required name="endereco" style="max-width:500px" maxlength="60">
      <p><label><i class="fa fa-calendar"></i> Data da consulta</label></p>  
      <input class="w3-input w3-border"  name="data_consulta" type="date" style="max-width:500px" placeholder="DD/MM/AAAA" required name="Nascimento">
	  <p><label><i class="fa fa-clock-o"></i> Horário da consulta</label></p>  
      <input class="w3-input w3-border" id="InputHora" name="horario_consulta" type="text" style="max-width:500px" placeholder="__:__" required name="Nascimento" maxlength="5">
	  <p><label><i class="fa fa-heart"></i> Sintomas</label></p>  
      <input class="w3-input w3-border" id="InputDI" name="diagnostico"  type="text" style="max-width:500px" placeholder="Sintomas" required name="Nascimento" maxlength="60">
      <p><h5 class="w3-vermelho w3-left" id="invalid"> </h5> 
      <p><h5 class="w3-verde w3-left" id="valid">  </h5> 
      <button type="submit" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-left" style="max-width:500px">AGENDAR</button></form>
      <button class="w3-button w3-red w3-section w3-left" onclick=limpa_e()>Fechar</button></h4>
    </div>
  </div>
</div>

<!-- Ticket Modal dados alterar-->
<div id="altera_dados" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:550px">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
    <span onclick=limpa_e()
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-address-card-o w3-margin-right"></i>Alteração de Dados</h2>
    </header>
    <div class="w3-container w3-preto">
    <h4>
    <form name="alt_pac" method="POST" action="alteracao/alt.php?t=paciente"> 
        <p><label><i class="fa fa-id-card-o"></i> RG:<label> 
          <input type="text" disabled  style="max-width:200px" id="InputRG" name="rg" class="w3-inpute w3-border" value=<?php echo $user['rg'] ?>></p>
        
        <p><label><i class="fa fa-user"></i> Nome:</label> 
        <input type="text" name="nome" style="max-width:400px"  class="w3-inpute w3-border" value="<?php echo $user['nome'] ?> "  placeholder="Nome" required name="Nome"></p>
       
        <p><label><i class="fa fa-birthday-cake"></i> Nascimento:
        </label><input class="w3-inpute w3-border" style="max-width:200px"  name="nascimento" value=<?php echo $user['data_nasc']  ?> type="date" placeholder="DD/MM/AAAA" required name="Nascimento"></p>  
        
        <p><label><i class="fa fa-phone"></i> Telefone: </label>
        <input class="w3-inpute w3-border" style="max-width:200px" id="InputFone" name="fone" value="<?php echo $user['fone'] ?>" type="text" placeholder="00 00000-0000" required name="Telefone"></p>   
        
        <p><label><i class="fa fa-id-card-o"></i> CPF: </label>
        <input class="w3-inpute w3-border" disabled style="max-width:200px" id="InputCPF" name="cpf" value=<?php echo $user['cpf']  ?> type="text" placeholder="000.000.000-00" required name="CPF"></p>   
          
        <p><label><i class="fa fa-map-pin"></i> Cidade: </label>
        <input class="w3-inpute w3-border" style="max-width:200px"  name="cidas" value="<?php echo $user['cidade']  ?>" type="text" placeholder="Cidade" required name="Cidade"></p>   
       
        <p><label><i class="fa fa-map-signs"></i> Estado (Sigla): </label> 
        <input class="w3-inpute w3-border" style="max-width:100px"  name="estado" value="<?php echo $user['estado']  ?>" type="text" placeholder="Estado" required name="Estado"></p>   
       
        <p><label><i class="fa fa-map-marker"></i> Endereço: </label>
        <input class="w3-inpute w3-border" style="max-width:350px"  name="endereco" value="<?php echo $user['endereco']  ?>" type="text" placeholder="Estado" required name="Estado"></p>   
       
        <p><label><i class="fa fa-home"></i> Número: </label>
        <input class="w3-inpute w3-border" style="max-width:100px" id="InputN" name="num" value=<?php echo $user['numero']  ?> type="text" placeholder="Número" required name="Número"></p>   
       
        <p><label><i class="fa fa-vcard-o"></i> CEP: </label>
        <input class="w3-inpute w3-border" style="max-width:200px" id="InputCEP"  name="cep" value=<?php echo $user['cep']  ?> type="text" placeholder="00000-000" required name="CEP"></p>   
        <h4 class="w3-vermelho w3-left" id="Nalterado"> </h4>
        <h4 class="w3-green w3-left" id="alterado"> </h4>
        <button type="submit" style="max-width:600px" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-center">ALTERAR <i class="fa fa-check"></i></button></form>
      <button class="w3-button w3-red w3-section w3-left" onclick=limpa_e()>Fechar</button></h4>
    </div>
  </div>
</div>

<script>
  function limpa_e(){
    document.getElementById('consulta_tm').style.display='none'
    document.getElementById('altera_dados').style.display='none'
    document.getElementById("invalid").textContent = "";
    document.getElementById("valid").textContent = "";
    document.getElementById("Nalterado").textContent = "";
    document.getElementById("alterado").textContent = "";
  }
</script>
</body>
</html>
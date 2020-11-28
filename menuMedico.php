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
    if(isset($_GET["erro"])){
        if($_GET["erro"]== 1){
          echo '
                  <script language = "javascript" type = "text/javascript">
                    $(document).ready(function(){
  
                      $("#altera_dados").css("display", "block");
  
                    });
                    document.addEventListener("DOMContentLoaded", function(event) {
                      document.getElementById("alterado").textContent = "Dados alterados";
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
                      document.getElementById("Nalterado").textContent = "Houve um erro ao alterar"
                    });
  
                  </script>
  
              ';
        }
        if($_GET["erro"]== 12){
            echo '
                    <script language = "javascript" type = "text/javascript">
                      $(document).ready(function(){
    
                        $("#consulta_tm").css("display", "block");
    
                      });
                      document.addEventListener("DOMContentLoaded", function(event) {
                        document.getElementById("enviado").textContent = "Diagnostico enviado";
                      });
    
                    </script>
    
                ';
          }
          else if($_GET["erro"]==6){
            echo '
                    <script language = "javascript" type = "text/javascript">
                      $(document).ready(function(){
                        $("#consulta_tm").css("display", "block");
    
                      });
                      document.addEventListener("DOMContentLoaded", function(event) {
                        document.getElementById("Nenviado").textContent = "Erro ao enviar o diagnostico"
                      });

                    </script>
    
                ';
          }
      }  
    session_start();
    include 'php/config.php';
    include 'php/mysqlexecuta.php';
    $con = conectar ();
    $crm = $_SESSION['crm'];

    $u = mysqlexecuta($con,"SELECT * FROM medico where crm like '$crm'");
    
    $user = mysqli_fetch_assoc($u);
    $id_med = $user['cod_medico'];
    date_default_timezone_set('America/Sao_Paulo');
    $datetime = date("Y-m-d");

    $user2['data_nasc']=SepararData($user['data_nasc']);   

    $c = mysqlexecuta($con,"SELECT * FROM consulta where cod_medico like '$id_med' and status like 'Aberto'");

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
        <h1 class="w3-center"> Bem vindo, Doutor <?php echo $user['nome']; ?> <i class="fa fa-stethoscope"></i> </h1>
    </div>
    <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-light-grey w3-borda2 w3-border-red" style="max-width:1280px">
        <h3 class="w3-opacity w3-center">Este é o menu, onde você pode gerenciar consultas e visualizar seus dados.
          <p>  O que deseja fazer ?</p>
        </h3><br>
        
        <div class="w3-content w3-container w3-borda3 w3-border-red w3-center" style="max-width:1280px">
            <h2 class="w3-center-left">Consultas</h2><hr>
            <p><h3 class="w3-left w3-half" >Consultas em andamento
            <p><button class=" w3-button w3-red w3-margin-bottom" onclick="document.getElementById('consulta_tm').style.display='block'">AGENDAR
            </h3>
            <p><h3 class="w3-left w3-half" >Consultas pendetes
            <p><button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('visualizar_tm').style.display='block'" >VISUALIZAR
            </h3><br>
        </div><br>
        <div class="w3-content w3-container w3-borda3 w3-border-red w3-center-left" style="max-width:1280px"><h2>Informações sobre o usuário</h1>
           <hr><h4 class="w3-left">
            CRM/UF: <?php echo $user['crm']?>/<?php echo $user['uf'];?>
            <p>Nome: <?php echo $user['nome']; ?>
            <p>CPF: <?php echo $user['cpf']; ?>
            <p>RG: <?php echo $user['rg']; ?>
            <p>Data de nascimento: <?php echo $user2['data_nasc']; ?>
            <p>Cidade: <?php echo $user['cidade']; ?>
            <p>Estado: <?php echo $user['estado'];  ?><hr>
            <p><button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('altera_dados').style.display='block'" >ALTERAR DADOS
            </h4>
        </div>
    </div>
    <div class="w3-container w3-agua w3-padding-32 "> </div>
<!-- Ticket Modal visualizar-->
<div id="visualizar_tm" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('visualizar_tm').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-file-o w3-margin-right"></i>Consultas pendentes</h2>
    </header>
    <div class="w3-container w3-preto">
        <h4>
        <?php
            while ($consulta = mysqli_fetch_array($c)){

              $consulta['data_consulta']=SepararData($consulta['data_consulta']);
        ?>
        <p><label>Endereço: <?php echo $consulta['endereco_consulta']; ?></p></label>
        <p><label>Data: <?php echo $consulta['data_consulta']; ?> </label></p>
        <p><label>Horário: <?php echo $consulta['horario_consulta']; 
        $id_pac = $consulta['cod_paciente'];
        $m = mysqlexecuta($con,"SELECT * FROM paciente where cod_paciente like '$id_pac'");
        $med = mysqli_fetch_assoc($m); ?></label></p>
        <p><label>Nome do paciente: <?php echo $med['nome'];?></p></label>
        <p><label>Sintomas: <?php echo $consulta['diagnostico']; ?><hr> <?php }?></label></p>
    <p><button class="w3-button w3-red w3-section" onclick="document.getElementById('visualizar_tm').style.display='none'">Fechar </button></p>
    </h4></div>
  </div>
</div>

<!-- Ticket Modal consulta criar-->
<div id="consulta_tm" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:500px">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
    <span onclick=limpa_e()
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-stethoscope w3-margin-right"></i>Consultas do dia 
        <?php
            echo SepararData(date("Y-m-d"));
        ?></h2>
    </header>
    <div class="w3-container w3-preto">
        <h4>
        <?php
            $agen = mysqlexecuta($con, "SELECT * from consulta where data_consulta like '$datetime' and Status like 'Aberto'");
            while ($agendado = mysqli_fetch_array($agen)){

              $agendado['data_consulta']=SepararData($agendado['data_consulta']);
        ?>
        <p><label>Endereço: <?php echo $agendado['endereco_consulta']; ?></p></label>
        <p><label>Data: <?php echo $agendado['data_consulta']; ?> </label></p>
        <p><label>Horário: <?php echo $agendado['horario_consulta']; 
        $id_pac = $agendado['cod_paciente'];
        $m = mysqlexecuta($con,"SELECT * FROM paciente where cod_paciente like '$id_pac'");
        $med = mysqli_fetch_assoc($m); ?></label></p>
        <p><label>Nome do paciente: <?php echo $med['nome'];?></p></label>
        <p><label>Sintomas: <?php echo $agendado['diagnostico'];?></label></p>
        <form name="alt_pac" method="POST" action="alteracao/alt.php?t=resultado"> 
        <p><label>Diagnóstico: </label>
        <input type="text" name="consulta_ID" hidden readonly="readonly" value=<?php echo $agendado['cod_consulta'] ?>>
        <textarea name="resultado" class="w3-input w3-border" placeholder="Após a consulta coloque o diagnóstico" required name="diagnostico"></textarea>
        <button type="submit" class="w3-button w3-red w3-section">Salvar diagnóstico </button></form><hr> 
        <?php }?>
        <h4 class="w3-vermelho " name="" id="Nenviado"> </h4>
        <h4 class="w3-green " namee="" id="enviado"> </h4>
    <button class="w3-button w3-red w3-section" onclick=limpa_e()>Fechar </button>
    </h4></div>
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
    <form name="alt_med" method="POST" action="alteracao/alt.php?t=medico"> 
        <p><label><i class="fa fa-id-card-o"></i> CRM/UF:<label> 
          <input type="text" disabled  style="max-width:200px" name="crm" class="w3-inpute w3-border" value="<?php echo $user['crm']."/". $user['uf'] ?>"</p>
        
        <p><label><i class="fa fa-user"></i> Nome:</label> 
        <input type="text" name="nome" style="max-width:400px"  class="w3-inpute w3-border" value="<?php echo $user['nome'] ?> "  placeholder="Nome" required name="Nome"></p>
       
        <p><label><i class="fa fa-id-card-o"></i> CPF:
        </label><input class="w3-inpute w3-border" disabled style="max-width:200px"  name="cpf" value="<?php echo $user['cpf']  ?>" type="text" placeholder="000.000.000-00" required name="CPF"></p>  
        
        <p><label><i class="fa fa-id-card-o"></i> RG:  </label>
        <input class="w3-inpute w3-border" disabled style="max-width:200px" name="rg" value="<?php echo $user['rg'] ?>" type="text" placeholder="00.000.000-0" required name="RG"></p>   
        
        <p><label><i class="fa fa-birthday-cake"></i> Data de nascimento: </label>
        <input class="w3-inpute w3-border" style="max-width:210px" name="nascimento" value=<?php echo $user['data_nasc']?> type="date" placeholder="DD/MM/AAAA" required name="Data de Nascimento"></p>   
          
        <p><label><i class="fa fa-map-pin"></i> Cidade: </label>
        <input class="w3-inpute w3-border" style="max-width:200px"  name="cidade" value="<?php echo $user['cidade']  ?>" type="text" placeholder="Cidade" required name="Cidade"></p>   
       
        <p><label><i class="fa fa-map-signs"></i> Estado (Sigla): </label> 
        <input class="w3-inpute w3-border" style="max-width:100px"  name="estado" value="<?php echo $user['estado']  ?>" type="text" placeholder="Estado" required name="Estado"></p>    
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
    document.getElementById("Nalterado").textContent = "";
    document.getElementById("alterado").textContent = "";
    document.getElementById("enviado").textContent = "";
    document.getElementById("Nenviado").textContent = "";
  }
</script>
</body>
</html>
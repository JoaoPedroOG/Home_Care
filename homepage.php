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

<body class="w3-aqua w3-white">
<?php 
   if(isset($_GET["e"])){
      if($_GET["e"] == 1){
 
        echo '

            <script language = "javascript" type = "text/javascript">

                $(document).ready(function(){

                    $("#ticketModal_pac").css("display", "block");

                });
              document.addEventListener("DOMContentLoaded", function(event) {
                document.getElementById("invalid").textContent = "CPF ou Senha inválidos";
              });

            </script>

        ';
      }
      else if($_GET["e"]==2){
        echo '
              <script language = "javascript" type = "text/javascript">

                  $(document).ready(function(){

                      $("#ticketModal_med").css("display", "block");

                  });
                document.addEventListener("DOMContentLoaded", function(event) {
                  document.getElementById("invalid2").textContent = "CRM ou Senha inválidos";
                });

              </script>

        ';
      }
      else if($_GET["e"]==3){
        echo '

          <script language = "javascript" type = "text/javascript">

              $(document).ready(function(){

                  $("#ticketModal_hosp").css("display", "block");

              });
            document.addEventListener("DOMContentLoaded", function(event) {
              document.getElementById("invalid3").textContent = "CNES ou Senha inválidos";
            });
          </script>
        ';
      }
      else if($_GET["e"]==4){
        echo '

          <script language = "javascript" type = "text/javascript">

              $(document).ready(function(){

                  $("#ticketModal_hosp2").css("display", "block");

              });
            document.addEventListener("DOMContentLoaded", function(event) {
              document.getElementById("invalid4").textContent = "CNES ou Senha inválidos";
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
    <a href="#cadastrar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CADASTRAR</a>
    <a href="#contato" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ENTRAR <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a class="w3-bar-item w3-button" onclick="document.getElementById('ticketModal_pac').style.display='block'">Paciente</a>
        <a class="w3-bar-item w3-button" onclick="document.getElementById('ticketModal_med').style.display='block'">Médico</a>
        <a class="w3-bar-item w3-button" onclick="document.getElementById('ticketModal_hosp').style.display='block'">Hospital</a>
      </div>
    </div>
	<a href="sobre.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SOBRE</a>
  </div>
</div>

<!-- Ticket Modal Paciente Login -->
<div id="ticketModal_pac" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('ticketModal_pac').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-user-circle w3-margin-right"></i>Paciente Login</h2>
    </header>
    <div class="w3-container w3-preto">
      <form name="entra_pac" method="POST" action="php/login.php?v=1">
      <p><label><i class="fa fa-id-card-o"></i> CPF</label></p>  
      <input class="w3-input w3-border " id="InputCPF" name="login" type="text" placeholder="Digite seu CPF" required name="CPF" maxlength="14">
      <p><label><i class="fa fa-key"></i> Senha</label></p>
      <input class="w3-input w3-border" name="senha" type="password" placeholder="Digite sua senha" required name="Senha">
      <h5 class="w3-vermelho w3-left" id="invalid" > </h5>
      <button type="submit" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-right">ENTRAR <i class="fa fa-check"></i></button></form>
      <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal_pac').style.display='none'">Close <i class="fa fa-remove"></i></button>
      <p class="w3-right">Não tem uma conta? <a href="#cadastrar" class="w3-text-blue" onclick="document.getElementById('ticketModal_pac').style.display='none'" >Cadastre-se</a></p>
    </div>
  </div>
</div>
<!-- Ticket Modal Médico Login -->
<div id="ticketModal_med" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('ticketModal_med').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-user-md w3-margin-right"></i>Médico Login</h2>
    </header>
    <div class="w3-container w3-preto">
      <form name="entra_med" method="POST" action="php/login.php?v=2">
      <p><label><i class="fa fa-id-card-o"></i> CRM</label></p>  
      <input class="w3-input w3-border" id="InputCRM" name="login" type="text" placeholder="Digite seu CRM" required name="CRM" maxlength="10">
      <p><label><i class="fa fa-key"></i> Senha</label></p>
      <input class="w3-input w3-border" name="senha" type="password" placeholder="Digite sua senha" required name="Senha">
      <h5 class="w3-vermelho w3-left" id="invalid2"> </h5>
      <button type="submit" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-right">ENTRAR <i class="fa fa-check"></i></button></form>
      <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal_med').style.display='none'">Close <i class="fa fa-remove"></i></button>
      <p class="w3-right">Não tem uma conta? <a href="#cadastrar" class="w3-text-blue" onclick="document.getElementById('ticketModal_med').style.display='none'" >Cadastre-se</a></p>
    </div>
  </div>
</div>
<!-- Ticket Modal Hospital Login -->
<div id="ticketModal_hosp" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('ticketModal_hosp').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-hospital-o w3-margin-right"></i>Hospital Login</h2>
    </header>
    <div class="w3-container w3-preto">
      <form name="entra_pac" method="POST" action="php/login.php?v=3">
      <p><label><i class="fa fa-id-card-o"></i> CNES</label></p>  
      <input class="w3-input w3-border" id="InputCNES" name="login" type="text" placeholder="Digite o CNES" required name="CNES" maxlength="7">
      <p><label><i class="fa fa-key"></i> Senha</label></p>
      <input class="w3-input w3-border" name="senha" type="password" placeholder="Digite a senha" required name="Senha">
      <h5 class="w3-vermelho w3-left" id="invalid3" > </h5>
      <button type="submit" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-right">ENTRAR <i class="fa fa-check"></i></button></form>
      <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal_hosp').style.display='none'">Close <i class="fa fa-remove"></i></button>
      <p class="w3-right">Não tem uma conta? <a href="#cadastrar" class="w3-text-blue" onclick="document.getElementById('ticketModal_hosp').style.display='none'" >Cadastre-se</a></p>
    </div>
  </div>
</div>

<!-- Ticket Modal Hospital Login 2 -->
<div id="ticketModal_hosp2" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container w3-red w3-center w3-padding-32"> 
      <span onclick="document.getElementById('ticketModal_hosp2').style.display='none'" 
     class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
      <h2 class="w3-wide"><i class="fa fa-hospital-o w3-margin-right"></i>Hospital Login</h2>
    </header>
    <div class="w3-container w3-preto">
      <!-- login 4 verifica se o login do hospital é real e, com isso o encaminha para a pagina de cadastro de médico-->
      <form name="entra_pac" method="POST" action="php/login.php?v=4"> 
      <p><label><i class="fa fa-id-card-o"></i> CNES</label></p>  
      <input class="w3-input w3-border" id="InputCNES" name="login" type="text" placeholder="Digite o CNES" required name="CNES" maxlength="7">
      <p><label><i class="fa fa-key"></i> Senha</label></p>
      <input class="w3-input w3-border" name="senha" type="password" placeholder="Digite a senha" required name="Senha">
      <h5 class="w3-vermelho w3-left" id="invalid4" > </h5>
      <button type="submit" class="w3-button w3-block w3-red w3-padding-16 w3-section w3-right">ENTRAR <i class="fa fa-check"></i></button></form>
      <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal_hosp2').style.display='none'">Close <i class="fa fa-remove"></i></button>
      <p class="w3-right">Não tem uma conta? <a href="#cadastrar" class="w3-text-blue" onclick="document.getElementById('ticketModal_hosp2').style.display='none'" >Cadastre-se</a></p>
    </div>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#cadastrar" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CADASTRAR</a>
  <a href="#contato" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTATO</a>
  <a href="#sobre" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SOBRE</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">


  <!-- Seção Nosso Trabalho -->
  <div class="w3-container w3-content w3-center w3-padding-64 w3-white" style="max-width:800px" id="trabs">
    <h2 class="w3-wide ">NOSSO SERVIÇO</h2>
    <p class="w3-justify ">O Home&Care é um site voltado para aqueles que optaram pelo hospital ir até você.
	    Nosso site permite que você, cliente, solicite um médico de um hospital de sua preferência para se direcionar 
	    até a sua casa e assim realizar uma consulta médica da mesma forma que em um hospital. São simples os passos para se registrar
	    e começar a utilizar dos nossos serviços, continue rolando para saber mais.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Criar uma consulta</p>
        <img src="img/medico.png" class="w3-round w3-margin-bottom" alt="consulta" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Esperar pelo médico</p>
        <img src="img/relogio.png" class="w3-round w3-margin-bottom" alt="tempo" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Ser atendido na sua casa</p>
        <img src="img/ferramenta.png" class="w3-round" alt="atendimento" style="width:60%">
      </div>
    </div>
  </div>

  <!-- Seção Cadastro -->
  <div class="w3-red" id="cadastrar">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">FAÇA SEU CADASTRO</h2>
      <p class="w3-opacity w3-center"><i>Cadastre-se agora mesmo e junte-se a nós!</i></p><br>
		<h3 class="w3-wide w3-center">Cadastre-se como:</h3><br>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom ">
          <img src="img/pac.png" alt="Paciente" style="width:100%"  class="w3-hover-opacity ">
		  <div class="w3-container w3-amber">
            <p><b>Paciente</b></p>
            <p>Para se cadastrar como um paciente clique no botão.</p><br><br>
            <a href="cadastro/cad_paciente.php"><button class="w3-button w3-black w3-margin-bottom" >CADASTRAR</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/doctor.png" alt="Médico" style="width:100%"  class="w3-hover-opacity"> 
          <div class="w3-container w3-amber">
            <p><b>Médico</b></p>
			<p>Para se cadastrar como um médico clique no botão.</p>
			<h6 class="w3-opacity">Aviso: Apenas contas do tipo hospital podem cadastrar os médicos.</h6>
          <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal_hosp2').style.display='block'">CADASTRAR</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/hospital.png" alt="Hospital" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-amber">
            <p><b>Hospital</b></p>
            <p>Para se cadastrar como um hospital clique no botão.</p><br><br>
           <a href="cadastro/cad_hospital.php"><button class="w3-button w3-black w3-margin-bottom" >CADASTRAR</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Seção Contato -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contato">
    <h2 class="w3-wide w3-center">CONTATO</h2>
    <p class="w3-opacity w3-center"><i>Dúvidas? Envie-nos uma mensagem!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> São Paulo, BR<br>
        <i class="fa fa-phone" style="width:30px"></i> Fone: +55 11 99186-0295<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: atendimento@homecare.com<br>
      </div>
      <div class="w3-col m6">
        <form name="duvida" method="POST" action="php/duvidas.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px"> 
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Nome" required name="Nome">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="Mensagem">
          <button class="w3-button w3-black w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-55 w3-center w3-red w3-large" id="sobre">
<div class="w3-container w3-content w3-center w3-padding-64 w3-white" style="max-width:1000px" >
  <h2 class="w3-wide w3-center">SOBRE</h2>
  <p class="w3-justify ">A Home&Care foi criada com o objetivo de 
    ajudar pessoas que buscam praticidade 
  na hora de realizar uma consulta médica. Esperamos que nosso 
  projeto consiga 
  fazer as pessoas perderem menos tempo em filas de hospitais e 
  deixe a relação
  médico-paciente muito mais próxima.</p>
  <p class="w3-justify">A programação utilizada em nosso site foi 
    visando a praticidade e objetividade para, assim, 
  o cliente sentir-se confortável com o visual. O site foi fruto 
  de um Trabalho de Conclusão de Curso da ETEC da 
  Zona Leste, o mesmo foi programado pelo aluno Alexandre Gameiro 
  de 3º ETIM Informática. Os ícones nos quais utilizamos para 
  fácil entendimento do site está disponível em 
  <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> da <a href="https://www.flaticon.com/" title="Flaticon"> Flaticon</a>
  </p>
</div>
</footer>
<footer>
<script>
  
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  // When the user clicks anywhere outside of the modal, close it
  var modal = document.getElementById('ticketModal');
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
</body>
</html>
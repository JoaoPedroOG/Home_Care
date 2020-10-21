<html>
<head>

	<title>Login Page</title>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
	<link rel="icon" type="image/png" href="../img/logo.png">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<?php
ini_set('default_charset', 'UTF-8');


$rg= $_POST["rg"];
$nome= $_POST["nome"];
$data_nasc= $_POST["dataNasc"];
$fone= $_POST["telCel"];
$cpf= $_POST["cpf"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$endereco= $_POST["endereco"];
$cep= $_POST["cep"];
$num= $_POST["numero"];
$senha= $_POST["senha"];

include 'config.php';
include 'mysqlexecuta.php';

$con = conectar();

mysql_select_db('bdHomeCare');

$sql = "INSERT INTO paciente(rg, nome, data_nasc, fone, cpf, cidade, estado, endereco, cep, numero, senha) 
values ('$rg','$nome','$data_nasc','$fone','$cpf','$cidade','$estado','$endereco','$cep',$num,'$senha')";

$res = mysqlexecuta($con,$sql);
?>
<script language=javascript>
	function valida(){
		vazio=false;
		if(document.entra.cpf.value==""){
			alert("O campo CPF é obrigatório");
			vazio=true;
		}
		if(document.entra.senha.value==""){
			alert("O campo senha é obrigatório");
			vazio=true;
		}
		if(vazio==false) document.entra.submit();
	}
	function Mascara (formato, keypress, objeto){
		campo = eval (objeto);
		//cpf
		if(formato=='cpf'){  //537.045.224-91
			separador1 = '.';
			separador2 = '-';
			conjunto1 = 3;
			conjunto2 = 7;
			conjunto3 = 11;
			if (campo.value.length == conjunto1){
				campo.value = campo.value + separador1;
			}
			if (campo.value.length == conjunto2){
				campo.value = campo.value + separador1;
			}
			if (campo.value.length == conjunto3){
				campo.value = campo.value + separador2;
			}
		}
	}
</script>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<form name="entra" method="POST" action="../php/login.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="cpf" maxlength=14 class="form-control" placeholder="CPF"
						title="000.000.000-00" onkeypress="Mascara('cpf',window.event.keyCode,'document.entra.cpf')">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha" class="form-control" placeholder="Senha">
					</div>
					<div>
						<p align=center><font color=#10D619>Paciente cadastrado</p>
					</div>
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn" onclick="valida()">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
						Não possui uma conta?<a href="../cadastro_paciente.html">Cadastre-se</a>
				</div>

			</div>
		</div>
	</div>
</div>
</body>
</html>

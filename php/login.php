<html>
<head><title>Login Page </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Login Page</title>
   
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
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar ();
mysql_select_db('bdHomeCare');
$login= $_POST["cpf"];
$senha= $_POST["senha"];
$sql="SELECT * FROM paciente where cpf like '$login' && senha like '$senha'";
$res = mysqlexecuta($con,$sql);
$quant= (mysql_num_rows($res)); //qtde de linhas encontradas na consulta
if ($quant==0)
    {?>
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
</script>
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
						<input type="text" name="cpf" class="form-control" placeholder="CPF">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha" class="form-control" placeholder="Senha">
					</div>
					<div>
						<p align=center><font color=red>Senha ou CPF inválido</p>
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
<?php
}
else
    {
    header("location:menu.html");}
?>
  </body>
  </html>
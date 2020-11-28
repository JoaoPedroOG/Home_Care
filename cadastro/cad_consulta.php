
<?php
session_start();
include '../php/config.php';
include '../php/mysqlexecuta.php';
$con = conectar();

ini_set('default_charset', 'UTF-8');
list ($nome_med, $especialidade) = explode ("-", $_POST['medico_esp']);
$nome_med = trim($nome_med);
$cpf = $_SESSION['cpf'];


$u = mysqlexecuta($con,"SELECT * FROM paciente where cpf like '$cpf'");
    $user = mysqli_fetch_assoc($u);

$med = mysqlexecuta($con,"SELECT * from medico where nome like '$nome_med'" );
    $userm = mysqli_fetch_array($med);


$cod_medico = $userm['cod_medico'];
$cod_paciente = $user['cod_paciente'];
$endereco_consulta = $_POST["endereco_consulta"];
$data_consulta = $_POST["data_consulta"];
$horario_consulta = $_POST["horario_consulta"];
$diagnostico = $_POST["diagnostico"];


$sql = "INSERT INTO consulta(cod_medico, cod_paciente, endereco_consulta, data_consulta, horario_consulta, diagnostico, Status)
    VALUES('$cod_medico', '$cod_paciente', '$endereco_consulta', '$data_consulta', '$horario_consulta', '$diagnostico', 'Aberto')";

$pesqCon = "SELECT cod_paciente, cod_medico, data_consulta, horario_consulta from consulta where 
    cod_paciente like '$cod_paciente' and cod_medico like '$cod_medico' and data_consulta like '$data_consulta' and horario_consulta like '$horario_consulta' ";

$Pesq_Consulta = mysqlexecuta($con, $pesqCon );
$Confirma_Consulta = mysqli_num_rows($Pesq_Consulta);
echo $sql;
if($Confirma_Consulta > 0 ){
   
    header('location:../menu.php?e=6');
}
else{
    
    $res = mysqlexecuta($con, $sql);
    header('location:../menu.php?e=12');
}
?>
<?php
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar ();
$verificacao = $_GET['v'];

$login= $_POST["login"];
$senha= $_POST["senha"];

switch ($verificacao){
  case 1:
    $sql="SELECT * FROM paciente where cpf like '$login' and senha like '$senha'";
    $e=1;
  break;
  case 2:
    $sql="SELECT * FROM medico where crm like '$login' && senha like '$senha'";
    $e=2;
  break;
  case 3:
    $sql="SELECT * FROM hospital where cnes like '$login' && senha like '$senha'";
    $e=3;
  break;
  case 4:
    $sql="SELECT * FROM hospital where cnes like '$login' && senha like '$senha'";
    $e=4;
  break; 
}

$res = mysqlexecuta($con,$sql);
$quant= (mysqli_num_rows($res)); //qtde de linhas encontradas na consulta
if ($quant==0){
  header('location:../homepage.php?e='.$e);
  //echo $e." ".$quant." ".$sql;
}

    else if($e!=4){
    header("location:menu.php");}
    else if($e==4){
    header("location:../cadastro/cad_medico.php");
    }
?>
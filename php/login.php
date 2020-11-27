<?php
session_start();
include 'config.php';
include 'mysqlexecuta.php';
$con = conectar ();
$verificacao = $_GET['v'];

$login= $_POST["login"];
$senha= $_POST["senha"];

switch ($verificacao){
  case 1:
    $sql="SELECT * FROM paciente where cpf like '$login' and senha like '$senha'";
    $nome_user="SELECT nome FROM paciente where cpf like '$login'";
    $e=1;
  break;
  case 2:
    $sql="SELECT * FROM medico where crm like '$login' && senha like '$senha'";
    $nome_user="SELECT nome FROM medico where crm like '$login'";
    $e=2;
  break;
  case 3:
    $sql="SELECT * FROM hospital where cnes like '$login' && senha like '$senha'";
    $nome_user="SELECT nome FROM hospital where cnes like '$login'";
    $e=3;
  break;
  case 4:
    $sql="SELECT * FROM hospital where cnes like '$login' && senha like '$senha'";
    $e=4;
  break; 
}
$_SESSION['cpf'] = $login;
$_SESSION['cnes'] = $login;
$res = mysqlexecuta($con,$sql);
$quant= (mysqli_num_rows($res)); //qtde de linhas encontradas na consulta
if ($quant==0){
  header('location:../homepage.php?e='.$e);
  //echo $e." ".$quant." ".$sql;
}
    else if($e!=4){
    if ($e == 1) {
      header("location:../menu.php");
      }
    else if ($e == 2) {
      header("location:../menu.php");
      }
    else if ($e == 3) {
      header("location:../menuHospital.php");
      }
    }
    else if($e==4){
    header("location:../menuHospital.php");
    }
?>
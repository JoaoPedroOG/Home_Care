<?php

session_start();
include '../php/config.php';
include '../php/mysqlexecuta.php';

$con = conectar();
$tipo = $_GET['t'];


ini_set('default_charset', 'UTF-8');




switch ($tipo) {
    case 'paciente':
        $nome_paciente = $_POST["nome"];
        $nascimento = $_POST["nascimento"];
        $telefone = $_POST["fone"];
        $cpf_paciente = $_SESSION['cpf'];
        $cidade_paciente = $_POST["cidas"];
        $estado_paciente = $_POST["estado"];
        $endereco_paciente = $_POST["endereco"];
        $num_paciente = $_POST["num"];
        $cep_paciente = $_POST["cep"];
        $sql = "UPDATE paciente set nome = '$nome_paciente', data_nasc = '$nascimento', fone = '$telefone', cidade = '$cidade_paciente',
        estado = '$estado_paciente', endereco = '$endereco_paciente', numero = '$num_paciente', cep = '$cep_paciente' WHERE cpf like '$cpf_paciente'";
        break;
    case 'hospital':
        $nome_h = $_POST["nome"];
        $telefone_h = $_POST["fone"];
        $endereco_h = $_POST["endereco"];
        $cep_h = $_POST["cep"];
        $cnes = $_SESSION['cnes'];
        $num_h = $_POST["num"];
        $sql = "UPDATE hospital set nome = '$nome_h', telefone = '$telefone_h', endereco = '$endereco_h', cep = '$cep_h', numero = '$num_h' WHERE cnes like '$cnes' ";
        break;
}
try {
        $res = mysqlexecuta($con, $sql);
        
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    }
if($tipo=='paciente'){
    $a = mysqlexecuta($con, "SELECT * from paciente where nome like '$nome_paciente' and cpf like '$cpf_paciente'");
}
else if($tipo=='hospital'){
    $a = mysqlexecuta($con, "SELECT * from hospital where nome like '$nome_h' and cnes like '$cnes' and telefone like '$telefone_h'");
}

$alterou = mysqli_num_rows($a);

if ($alterou == 0) {
    header('location:../menuHospital.php?erro=2');
} 
else {
    header('location:../menuHospital.php?erro=1'); //certo
}

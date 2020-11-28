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
    case 'medico':
        $nome_medico = $_POST["nome"];
        $crm = $_SESSION["crm"];
        $nascimento = $_POST["nascimento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $sql = "UPDATE medico set nome = '$nome_medico', data_nasc = '$nascimento', cidade = '$cidade', estado = '$estado' where crm like '$crm' ";
        break;
    case 'resultado':
        $cod_consulta = $_POST['consulta_ID'];
        $resultado = $_POST['resultado'];
        
        $sql = "UPDATE consulta set resultado = '$resultado', Status = 'Fechado' where cod_consulta like '$cod_consulta'";
        
        break;
}
try {
    $res = mysqlexecuta($con, $sql);
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}
if ($tipo == 'paciente') {
    $a = mysqlexecuta($con, "SELECT * from paciente where nome like '$nome_paciente' and cpf like '$cpf_paciente'");
} else if ($tipo == 'hospital') {
    $a = mysqlexecuta($con, "SELECT * from hospital where nome like '$nome_h' and cnes like '$cnes' and telefone like '$telefone_h'");
} else if ($tipo == 'medico') {
    $a = mysqlexecuta($con, "SELECT * from medico where nome like '$nome_medico' and crm like '$crm'");
} else if ($tipo == 'resultado') {
    $a = mysqlexecuta($con, "SELECT * from consulta where resultado like '$resultado' and cod_consulta like '$cod_consulta'");
}

$alterou = mysqli_num_rows($a);

if ($alterou == 0) {
    if ($tipo == 'paciente') {
        header('location:../menu.php?erro=2');
    }
    if ($tipo == 'hospital') {
        header('location:../menuHospital.php?erro=2');
    }
    if ($tipo == 'medico') {
        header('location:../menuMedico.php?erro=2');
    }
    if ($tipo == 'resultado') {
        header('location:../menuMedico.php?erro=6');
    }
} else {
    if ($tipo == 'paciente') {
        header('location:../menu.php?erro=1'); //certo
    }
    if ($tipo == 'hospital') {
        header('location:../menuHospital.php?erro=1');
    }
    if ($tipo == 'medico') {
        header('location:../menuMedico.php?erro=1');
    }
    if ($tipo == 'resultado') {
        header('location:../menuMedico.php?erro=12');
    }
}

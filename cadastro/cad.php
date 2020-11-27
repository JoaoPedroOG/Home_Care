<?php
session_start();
include '../php/config.php';
include '../php/mysqlexecuta.php';

$con = conectar();
$tipo = $_GET['t'];

ini_set('default_charset', 'UTF-8');

switch ($tipo) {
  case 1:
    $nome_pac = $_POST["nome_pac"];
    $rg_pac = $_POST["rg_pac"];
    $data_nasc_pac = $_POST["nasc_pac"];
    $fone_pac = $_POST["fone_pac"];
    $cpf_pac = $_POST["cpf_pac"];
    $cidade_pac = $_POST["cidade_pac"];
    $estado_pac = $_POST["estado_pac"];
    $endereco_pac = $_POST["endereco_pac"];
    $numero_pac = $_POST["num_pac"];
    $cep_pac = $_POST["cep_pac"];
    $senha_pac = $_POST["senha_pac"];
    $sql = "INSERT INTO paciente(rg, nome, data_nasc, fone, cpf, cidade, estado, endereco, cep, numero, senha) 
      VALUES ('$rg_pac','$nome_pac','$data_nasc_pac','$fone_pac','$cpf_pac','$cidade_pac','$estado_pac','$endereco_pac','$cep_pac',$numero_pac,'$senha_pac')";
    $consulta = mysqli_query($con, "SELECT * FROM paciente where rg like '$rg_pac' or cpf like '$cpf_pac'");
    break;
  case 2:
    $crm_med = $_POST["crm_med"];
    $uf_med = $_POST["uf_med"];
    $nome_med = $_POST["nome_med"];
    $data_nasc_med = $_POST["data_nasc_med"];
    $rg_med = $_POST["rg_med"];
    $cpf_med = $_POST["cpf_med"];
    $cidade_med = $_POST["cidade_med"];
    $estado_med = $_POST["estado_med"];
    $esp_med = $_POST["esp"];
    $senha_med = $_POST["senha_med"];
    $cnes = $_SESSION["cnes"];
    $u = mysqlexecuta($con,"SELECT * FROM hospital where cnes like '$cnes'");
    $userh = mysqli_fetch_assoc($u);
    $id_hosp = $userh['cod_hospital'];
    $g = mysqlexecuta($con,"SELECT * FROM especialidade where nome_esp like '$esp_med'");
    $sql = "INSERT INTO medico(crm, uf, nome, data_nasc, rg, cpf, cidade, estado, senha) 
    VALUES('$crm_med', '$uf_med', '$nome_med', '$data_nasc_med', '$rg_med', '$cpf_med', '$cidade_med', '$estado_med', '$senha_med')";
    $consulta = mysqli_query($con, "SELECT * FROM medico where crm like '$crm_med' or cpf like '$cpf_med' or rg like '$rg_med'");
    break;
  case 3:
    $cnpj_hosp = $_POST["cnpj_hosp"];
    $cnes_hosp = $_POST["cnes_hosp"];
    $nome_hosp = $_POST["nome_hosp"];
    $telefone_hosp = $_POST["fone_hosp"];
    $cep_hosp = $_POST["cep_hosp"];
    $endereco_hosp = $_POST["endereco_hosp"];
    $numero_hosp = $_POST["num_hosp"];
    $senha_hosp = $_POST["senha_hosp"];

    $sql = "INSERT INTO hospital(cnpj, nome, telefone, cep, endereco, cnes, numero, senha) 
      VALUES('$cnpj_hosp', '$nome_hosp', '$telefone_hosp', '$cep_hosp', '$endereco_hosp', '$cnes_hosp', $numero_hosp, '$senha_hosp')";
    $consulta = mysqli_query($con, "SELECT * FROM hospital where cnpj like '$cnpj_hosp' or cnes like '$cnes_hosp'");
    break;
}

$ExisteConta = mysqli_num_rows($consulta);

if ($ExisteConta > 0) {
  if($tipo==1){
    header('location:cad_paciente.php?e=1');
  }
  else if($tipo==2){
    header('location:cad_medico.php?e=1');
  }
  else if($tipo==3){
    header('location:cad_hospital.php?e=1');
  }
}
else if ($tipo==2){
  $res = mysqlexecuta($con, $sql);
  $h = mysqlexecuta($con,"SELECT * FROM medico where cpf like '$cpf_med'");
  $user = mysqli_fetch_assoc($h);
  $userg = mysqli_fetch_assoc($g);
  $idesp = $userg['cod_esp'];
  $idmed = $user['cod_medico'];
  $sqlmed = "INSERT INTO medico_especialidade(cod_medico, cod_esp)
  VALUES('$idmed','$idesp')";
  $sqlhos = "INSERT INTO hospital_medico(cod_hospital, cod_medico)
  VALUES('$id_hosp','$idmed')";
  $resmed = mysqlexecuta($con, $sqlmed);
  $reshos = mysqlexecuta($con, $sqlhos);
  header('location:cad_medico.php?e=2');
}

else if ($tipo==1 || $tipo==3){
  $res = mysqlexecuta($con, $sql);
  header('location:cad_paciente.php?e=2');
}

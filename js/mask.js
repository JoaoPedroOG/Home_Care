$(document).ready(function () {
  var $CPF = $("#InputCPF");
  $CPF.mask('000.000.000-00', { reverse: true });
  var $CRM = $("#InputCRM");
  $CRM.mask('00000000-0', { reverse: true });
  var $CNES = $("#InputCNES");
  $CNES.mask('0000000', { reverse: true });
  var $RG = $("#InputRG");
  $RG.mask('00.000.000-0', { reverse: true });
  var $DN = $("#InputDN");
  $DN.mask('00/00/0000', { reverse: true });
  var $nas = $("#InputNas");
  $nas.mask('00/00/0000', { reverse: true });
  var $Fone = $("#InputFone");
  $Fone.mask('00 00000-0000', { reverse: true });
  var $Num = $("#InputN");
  $Num.mask('0000', { reverse: true });
  var $CEP = $("#InputCEP");
  $CEP.mask('00000-000', { reverse: true });
  var $CNPJ = $("#InputCNPJ");
  $CNPJ.mask('00.000.000/0000-00', { reverse: true });
  var $Hora = $("#InputHora");
  $Hora.mask('00:00', { reverse: true });
});
$(document).ready(function(){ 
    var $CPF = $("#InputCPF");
    $CPF.mask('000.000.000-00', {reverse: true});
    });
$(document).ready(function(){ 
  var $CRM = $("#InputCRM");
  $CRM.mask('00000000-0', {reverse: true});
  });
$(document).ready(function(){ 
  var $CNES = $("#InputCNES");
    $CNES.mask('0000000', {reverse: true});
    });
$(document).ready(function(){ 
  var $RG = $("#InputRG");
  $RG.mask('00.000.000-0', {reverse: true});
  });
$(document).ready(function(){ 
  var $DN = $("#InputDN");
  $DN.mask('00/00/0000', {reverse: true});
  });
$(document).ready(function(){ 
  var $Fone = $("#InputFone");
  $Fone.mask(' (00)00000-0000', {reverse: true});
  });
$(document).ready(function(){ 
  var $Fone2 = $("#InputFone2");
  $Fone2.mask(' (00)0000-0000', {reverse: true});
  });  
$(document).ready(function(){ 
  var $Num = $("#InputN");
  $Num.mask('0000', {reverse: true});
  });
$(document).ready(function(){ 
  var $CEP = $("#InputCEP");
  $CEP.mask('00000-000', {reverse: true});
  });
$(document).ready(function(){ 
  var $CNPJ = $("#InputCNPJ");
  $CNPJ.mask('00.000.000/0000-00', {reverse: true});
  });
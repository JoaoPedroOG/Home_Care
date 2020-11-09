<<!DOCTYPE html>
   <html lang="pt">
   <title>PHP - Função Executar</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="../css/homepage.css">
   <link rel="icon" type="image/png" href="../img/logo.png">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
   <script src="../js/mask.js"></script>
   <style>
      body {
         font-family: "Lato", sans-serif
      }
   </style>

   <body class="w3-aqua w3-white">
      <?php
      ini_set('default_charset', 'UTF-8');


      /*
$id = Ponteiro da Conexao aberta
$sql = Clausula SQL a executar
$erro = Especifica se a fun�ao exibe ou nao (0=n�o, 1=sim)
$res = Reposta
*/
      function mysqlexecuta($con,$sql)
      {
         $erro = 1;
         if (empty($con) or !($sql))
            return 0;
         if (!($res = mysqli_query($con, $sql))) {
            if ($erro)
               exit;
         }
         return $res;
      }
      ?>
      <!-- <div class="w3-top">
  <div class="w3-bar w3-red w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-padding-large">HOME&CARE</a>
  </div>
</div>
 Page Content 
<div class="w3-container w3-aqua  w3-padding-48"></div>
<div class="w3-container w3-aqua  w3-padding-32"></div>
<div class=" w3-container w3-content  w3-center-left w3-padding-16 w3-red" style="max-width:500px">
   <h1 class="w3-wide w3-center w3-red ">OCORREU UM ERRO :C</h1>
</div>   
<div class="w3-container w3-content w3-center w3-white" style="max-width:800px" id="trabs">
   <div class="w3-container w3-content  w3-center-left w3-padding-32 w3-branco " style="max-width:500px">
      <h4 class="w3-justify ">Parece que ocorreu um erro na hora de fazer o que você estava pedindo,
         mas não se preocupe, podemos resolver! 
         <p>Saiba mais sobre possíveis erros <a class="w3-blue"href="erros.html">aqui</a>.</p>
      </h4>
   </div>
</div>-->
   </body>

   </html>
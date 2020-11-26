<?php
   /*
   $id = Ponteiro da Conexao aberta
   $sql = Clausula SQL a executar
   $erro = Especifica se a fun�ao exibe ou nao (0=n�o, 1=sim)
   $res = Reposta
   */
  ini_set('default_charset', 'UTF-8');
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
<HTML>
<HEAD>
 <TITLE>PHP - Fun��o Executa Comandos SQL</TITLE>
</HEAD>
<BODY>
<?php
ini_set('default_charset', 'UTF-8');


/*
$id = Ponteiro da Conex�o aberta
$sql = Clausula SQL a executar
$erro = Especifica se a fun�ao exibe ou nao (0=n�o, 1=sim)
$res = Reposta
*/
function mysqlexecuta($id,$sql,$erro = 1){
         if(empty($sql) or !($id))
         return 0;
         if (!($res = @mysql_query($sql,$id))){
            if($erro)
            echo "Ocorreu um erro na execu��o do Comando SQL no banco de dados. Favor Contactar o Administrador";
            echo "<br>" .  "<b> Comando: </b>" . $sql . "<b><br>Id: </b>" . $id . "<br>";
            exit;
         }
          return $res;
         }
?>
</BODY>
</HTML>

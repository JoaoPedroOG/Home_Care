<HTML>
<HEAD>
 <TITLE>PHP - Função Executa Comandos SQL</TITLE>
</HEAD>
<BODY>
<?php
ini_set('default_charset', 'UTF-8');


/*
$id = Ponteiro da Conexão aberta
$sql = Clausula SQL a executar
$erro = Especifica se a funçao exibe ou nao (0=não, 1=sim)
$res = Reposta
*/
function mysqlexecuta($id,$sql,$erro = 1){
         if(empty($sql) or !($id))
         return 0;
         if (!($res = @mysql_query($sql,$id))){
            if($erro)
            echo "Ocorreu um erro na execução do Comando SQL no banco de dados. Favor Contactar o Administrador";
            echo "<br>" .  "<b> Comando: </b>" . $sql . "<b><br>Id: </b>" . $id . "<br>";
            exit;
         }
          return $res;
         }
?>
</BODY>
</HTML>

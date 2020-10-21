<html>
<head>
  <title> Documento PHP </title>
</head>
<body>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    function  conectar ()
	{
$hostdb = '127.0.0.1'; //servidor mysql, pode ser o nome (localhost) ou o endereço ip (127.0.0.1)
$userdb = 'root'; //usuário do mysql que terá o acesso
$passadb = ''; //senha do usuário

if ($con  = mysql_pconnect($hostdb,$userdb,$passdb))
   {
	mysql_set_charset('utf8',$con);
    return $con; //se a conexão for bem sucedida, será retoranado a variável $con
   }
else
    {
     return 0; //se a conexão não ocorrer, será retornado 0
    }
}
?>
</body>
</html>

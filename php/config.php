<html>
<head>
  <title> Documento PHP </title>
</head>
<body>
<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    function  conectar ()
	{
$hostdb = '127.0.0.1'; //servidor mysql, pode ser o nome (localhost) ou o endere�o ip (127.0.0.1)
$userdb = 'root'; //usu�rio do mysql que ter� o acesso
$passadb = ''; //senha do usu�rio

if ($con  = mysql_pconnect($hostdb,$userdb,$passdb))
   {
	mysql_set_charset('utf8',$con);
    return $con; //se a conex�o for bem sucedida, ser� retoranado a vari�vel $con
   }
else
    {
     return 0; //se a conex�o n�o ocorrer, ser� retornado 0
    }
}
?>
</body>
</html>

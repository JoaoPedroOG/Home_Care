<?php

    function  conectar ()
	{
        $hostdb = '127.0.0.1'; //servidor mysql, pode ser o nome (localhost) ou o endere�o ip (127.0.0.1)
        $userdb = 'root'; //usu�rio do mysql que ter� o acesso
        $passdb = ''; //senha do usu�rio
        $bd = 'bdHomeCare';

        if ($con  = mysqli_connect($hostdb,$userdb,$passdb,$bd))
        {
            mysqli_set_charset($con,'utf8');
            return $con; //se a conex�o for bem sucedida, ser� retoranado a vari�vel $con
        }
        else
        {
            return 0; //se a conex�o n�o ocorrer, ser� retornado 0
        }
    }
?>

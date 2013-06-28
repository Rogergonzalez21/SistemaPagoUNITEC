<?php
	$con = mysql_connect("127.0.0.1","root");
	if (!$con)
	{
	  die('No se puede conectar al servidor: ' . mysql_error());
	}

	mysql_select_db("bd_sistema_pago", $con);
?>
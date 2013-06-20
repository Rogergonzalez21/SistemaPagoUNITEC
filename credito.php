<?php
	/*$fecha= "1 / 2014";
	
        if (!empty($_POST['nombre_tarjeta'])){

            $sql="INSERT INTO factura (fecha) VALUES ('$fecha')";
            include('conn.php');
            if (!mysql_query($sql,$con))
            {
                echo '<h1>System Error</h1> <p class = "error">Lo sentimos, no se ha podido registrar debido a problemas en el sistema!</p> ';
                die('Error: ' . mysql_error());
            }
            echo '<h1>Felicitaciones </h1> <p class = "suc">Ha logrado pagarle al Rector mucho dinero!</p> ';
            mysql_close($con);
        }
		
		if (!empty($_POST['nombre_tarjeta'])){

            $sql="INSERT INTO estudiante (ci, nombre) VALUES ('$_POST[cedula_tarjeta]', '$_POST[nombre_tarjeta]')";
            include('conn.php');
            if (!mysql_query($sql,$con))
            {
                echo '<h1>System Error</h1> <p class = "error">Lo sentimos, no se ha podido registrar debido a problemas en el sistema!</p> ';
                die('Error: ' . mysql_error());
            }
            echo '<h1>Felicitaciones </h1> <p class = "suc">Ha logrado pagarle al Rector mucho dinero!</p> ';
            mysql_close($con);
        }*/
?>

<html>
	<head>
		<title>Sistema de pago UNITEC - Credito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
		<link href="css/docs.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="metodoPagoHeader">
			<h1>Tarjeta de Credito</h1>
		</div>
		<div class="metodoPagoCredito">
			<br/>
			<form class="form-horizontal" action = "factura.php" method = "get">
				<div class="control-group">
					<label class="control-label">Tipo de tarjeta: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<select name="tipo_tarjeta" class="span3">
							<option value=""></option><option value="visa">Visa</option><option value="master">MasterCard</option><option value="amex">American Express</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Numero de Tarjeta: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="numero_tarjeta" class="span3"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha de Vencimiento: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						Mes: &nbsp&nbsp
						<select name="mes_vencimiento" class="span1">
							<option value=""></option><option value="1">1</option>
						</select>
						&nbsp&nbsp
						Año: &nbsp&nbsp
						<select name="ano_vencimiento" class="span1">
							<option value=""></option><option value="2014">2014</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Nombre y apellido: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="nombre_tarjeta" class="span3"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Cédula de Identidad <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="cedula_tarjeta" class="span3"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Código de seguridad <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="codigo_tarjeta" maxlength="3" class="span1"/>
					</div>
				</div>
				<p class="help-block">
					Todos los compos con <span style="color: rgb(239, 0, 27);">*</span> son obligatorios.
				</p><h3>Total a pagar: *total a pagar*</h3>
				<div class="control-group">
					<label class="control-label">Factura:</label>
					<div class="controls">
						<input type="checkbox" name="factura"/>
					</div>
				</div>
				<input class="btn btn-primary btn-large" type="submit" name="conf" value="Confirmar pago">
				
				<br/>
				<br/>
				<a href="index.html" class="btn btn-danger btn-large">Volver</a>
			</form>
		</div>
	</body>
</html>
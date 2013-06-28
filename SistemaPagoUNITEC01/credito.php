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
			<form class="form-horizontal" action = "factura.php" method = "post">
				<div class="control-group">
				<div class="control-group">
					<label class="control-label">Tipo de tarjeta: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<select name="tipo_tarjeta" class="span3">
							<option value=""></option><option value="visa" required >Visa</option><option value="master">MasterCard</option><option value="amex">American Express</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Numero de Tarjeta: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="numero_tarjeta" maxlength="16" class="span3" required />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha de Vencimiento: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="month" name="bdaymonth" required >
						<?php /*Mes:
						<select name="mes_vencimiento" required class="span1">
							<option value=""></option>
							<?php
								for($i = '1'; $i <= '12'; $i++)
								echo "<option value=\"$i\"  >$i</option>";
							?>
						</select>
						Año:
						<select name="ano_vencimiento" required class="span1">
							<option value=""></option>
							<?php
								for($i = '2014'; $i <= '2020'; $i++)
								echo "<option value=\"$i\" >$i</option>";
							?>
						</select> */ ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Nombre y apellido: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="nombre_tarjeta" class="span3" required />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Cédula de Identidad <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="cedula_tarjeta" maxlength="8" class="span3" required />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Código de seguridad <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="codigo_tarjeta_credito" maxlength="3" class="span1" required />
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
				<button class="btn btn-primary btn-large">
					Confirmar pago
				</button>
				<br/>
				<br/>
				<a href="index.html" class="btn btn-danger btn-large">Volver</a><script src="js/jquery-min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.validate.js"></script><script src="js/javascript.js"></script>
			</form>
		</div>
	</body>
</html>
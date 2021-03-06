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
			<h1>Tarjeta de Debito</h1>
		</div>
		<div class="metodoPagoCredito">
			<br/>
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Numero de Tarjeta: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						<input type="text" name="numero_tarjeta" class="span3"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha de Vencimiento: <span style="color: rgb(239, 0, 27);">*</span></label>
					<div class="controls">
						Dia: &nbsp&nbsp
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
						<input type="text" name="codigo_tarjeta" maxlength="4" class="span1"/>
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
				<a href="index.html" class="btn btn-danger btn-large">Volver</a>
			</form>
		</div>
	</body>
</html>
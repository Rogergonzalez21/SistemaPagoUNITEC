<?php
	$fecha = date("Y-m-d");
    $content = "
		<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
<link href="css/docs.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div style="width:919px;" class="row">
  <img src="img/UNITECLogo.png" alt="LogoUnitec" style="max-width:60%;"/>
  <div class="span9">
    Factura numero: *numero de factura*<br/>
    <div class="row">
      <div class="span2 border">
        Hemos recibido de
      </div>
      <div class="span6 border">
        *nombre*
      </div>
    </div>
    <div class="row">
      <div class="span2 border">
        Fecha
      </div>
      <div class="span2 border">
        $fecha
      </div>
      <div class="span2 border">
        Cedula
      </div>
      <div class="span2 border">
        *cedula*
      </div>
    </div>
    <div class="row">
      <div class="span2 border">
        Banco
      </div>
      <div class="span6 border">
        *banco*
      </div>
    </div>
  </div>
</div>
<br/><br/>
<div class="row">
  <div class="span9">
    <div class="row">
      <div class="span4 border">
        Descripcion
      </div>
      <div class="span4 border">
        Precio
      </div>
    </div>
    <div class="row">
      <div class="span4 border">
        *descripcion*
      </div>
      <div class="span4 border">
        *precio*
      </div>
    </div>
    <div class="row">
      <div class="span7 border">
        Total General:
      </div>
      <div class="span1 border">
        *total general*
      </div>
    </div>
  </div>
</div>
</body>
</html>";

    require_once('../html2pdf_v4.03/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('ejemplo.pdf');
?>
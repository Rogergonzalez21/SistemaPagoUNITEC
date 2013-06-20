<?php
	$fecha = date("Y-m-d");
    $content = "
		<page>
		    <img src=\"Imagen1.png\" >
		    <br>
		    <h3>Fecha: $fecha</h3>
			<h3>Descripcion:</h3>.<br>
		</page>";

    require_once('../html2pdf_v4.03/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('ejemplo.pdf');
?>
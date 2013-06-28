<?php	
	
	if (isset($_POST['factura'])) {
		
		include('conn.php');
		$sql = "SELECT * FROM factura";
		$rs = mysql_query($sql, $con);
		while ($row = mysql_fetch_array($rs)){
				$num_rand= rand('10','10000');
		        if($row['num_factura'] != $num_rand){
		            $num_factura = $num_rand;
					
					$fecha = date("Y-m-d");		 
					$content = "
			    	<html>
					<head>
					<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
					<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\"/>
					<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-responsive.min.css\"/>
					<link href=\"css/docs.css\" rel=\"stylesheet\" type=\"text/css\"/>
					<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
					</head>
					<body>
					<div style=\"width:919px;\" class=\"row\">
					  <img src=\"img/UNITECLogo.png\" alt=\"LogoUnitec\" style=\"max-width:60%;\"/>
					  <div class=\"span9\">
					    Factura numero: $num_factura<br/>
					    <div class=\"row\">
					      <div class=\"span2 border\">
					        Hemos recibido de
					      </div>
					      <div class=\"span6 border\">
					        $_POST[nombre_tarjeta]
					      </div>
					    </div>
					    <div class=\"row\">
					      <div class=\"span2 border\">
					        Fecha
					      </div>
					      <div class=\"span2 border\">
					        $fecha
					      </div>
					      <div class=\"span2 border\">
					        Cedula
					      </div>
					      <div class=\"span2 border\">
					        $_POST[cedula_tarjeta]
					      </div>
					    </div>
					    <div class=\"row\">
					      <div class=\"span2 border\">
					        Banco
					      </div>
					      <div class=\"span6 border\">
					        *banco*
					      </div>
					    </div>
					  </div>
					</div>
					<br/><br/>
					<div class=\"row\">
					  <div class=\"span9\">
					    <div class=\"row\">
					      <div class=\"span4 border\">
					        Descripcion
					      </div>
					      <div class=\"span4 border\">
					        Precio
					      </div>
					    </div>
					    <div class=\"row\">
					      <div class=\"span4 border\">
					        *descripcion*
					      </div>
					      <div class=\"span4 border\">
					        *precio*
					      </div>
					    </div>
					    <div class=\"row\">
					      <div class=\"span7 border\">
					        Total General:
					      </div>
					      <div class=\"span1 border\">
					        *total general*
					      </div>
					    </div>
					  </div>
					</div>
					</body>
				</html>
					";
				
				    require_once('../html2pdf_v4.03/html2pdf.class.php');
				    $html2pdf = new HTML2PDF('P','A4','fr');
				    $html2pdf->WriteHTML($content);
				    $html2pdf->Output('comprobante.pdf');
								
					        }
			} 
			mysql_close($con);
					
					$sql = "INSERT INTO factura (num_factura, fecha) VALUES ('$num_rand', '$fecha')";
					include ('conn.php');
					if (!mysql_query($sql, $con)) {
						echo '<h1>System Error</h1> <p class = "error">Lo sentimos, no se ha podido registrar debido a problemas en el sistema!</p> ';
						die('Error: ' . mysql_error());
					}
					mysql_close($con);
				
					$sql = "INSERT INTO estudiante (ci, nombre) VALUES ('$_POST[cedula_tarjeta]', '$_POST[nombre_tarjeta]')";
					include ('conn.php');
					if (!mysql_query($sql, $con)) {
						die('Error: ' . mysql_error());
					}
					mysql_close($con);
				
					/*if (!empty($_POST['nombre_tarjeta'])){
					 $sql="INSERT INTO materias (nombre_materia, precio) VALUES (' ', ' ')";
					 include('conn.php');
					 if (!mysql_query($sql,$con))
					 {
					 echo '<h1>System Error</h1> <p class = "error">Lo sentimos, no se ha podido registrar debido a problemas en el sistema!</p> ';
					 die('Error: ' . mysql_error());
					 }
					 echo '<h1>Felicitaciones </h1> <p class = "suc">Ha logrado pagarle al Rector mucho dinero!</p> ';
					 mysql_close($con);
					 }	            echo '<h1>Felicitaciones </h1> <p class = "suc">Ha logrado pagarle al Rector mucho dinero!</p> ';
					 */
		
		
		} else {
			echo 'El rector ahora puede comer en paz!';
		}
		
		
?>
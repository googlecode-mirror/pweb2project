<?php
require('calendario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Reserva de Vuelos</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="javascript" type="text/javascript" src="../javascript/jquery-1.3.1.min.js"></script>
	<script language="javascript" type="text/javascript" src="../javascript/jquery.functions.js"></script>
	<script language="javascript" type="text/javascript" src="../javascript/Validaciones.js"></script>    
</head>
<body>
	<div id="cabecera" >
		<img alt="logo" src="../images/LogoCompania_header.PNG"/>
	</div>
	<form name="form_vuelo"  action="dias_vuelos.php" method="post">
		<h1>Vuelos</h1><br/>
		<div id="formulario">	
			<input type="radio" id="id_idayvuelta" name="id_idayvuelta" checked="checked">
			Ida y Vuelta
			<br/><br/>
			<label for="origen">Origen:</label>
			<select id="id_origen" name="origen">
				<option value="levanta origenes">levanta todos los origenes</option>
				<?php
						/*$con = new conectar;
						$query = "SELECT xxxxxxx";
						$res = $con->SQLExec($query,'xxxxxx');
						$cant = count($res);
						for($i=0;$i<$cant-1;$i++){
						echo "<option value = ".$res[$i][1]." >".$res[$i][1]." - ".$res[$i][0]."</option>";}*/

						// Conectando, seleccionando la base de datos
						$conexion  = mysql_connect("localhost", "root", "") //mi bd no tiene password!
				        or die("No se pudo conectar: " .mysql_error());
						
						echo "Connected successfully";
						
						mysql_select_db("tp_pweb_database") 
						or die("No se pudo seleccionar la base de datos");
				
						// Realizar una consulta MySQL
						$consulta  = "select c_cod, c_desc from ciudad";
						$result = mysql_query($consulta, $conexion) 
						or die("Consulta fallida: " .mysql_error());
				
						// Imprimir los resultados en HTML
						$nfilas = mysql_num_rows($result);
						//$fila = mysql_fetch_array($result);
						//$cant = count($result);o
					?>
				</select>
				
			<br/><br/>
				
			<label for="destino">Destino:</label>
			<select id="id_destino" name="destino" >
			<option value="levanta destinos">levanta todos los destinos</option>
			<?php
				/*$con = new conectar;
				$query = "SELECT xxxxxxxxxx";
				$res = $con->SQLExec($query,'xxxxxx');
				$cant = count($res);
				for $i=0;$i<$cant-1;$i++){
				echo "<option value = ".$res[$i][1]." >".$res[$i][1]." - ".$res[$i][0]."</option>";}*/
			?>
			</select>
			<br/><br/>
			
			Fecha ida:
			<input type="text" name="fecha" id="fecha" readonly="readonly" /> 
			<a onclick="show_calendar('calendario');" style="cursor: pointer;">
				<small>(Seleccionar)</small>
			</a>
    		
    		<div id="calendario">
    			<?php calendar_html("calendario","fecha"); ?>
    		</div>
    		
    		<br/><br/>
			
			Fecha Vuelta: 
			<input type="text" name="fechaV" id="fechaV" readonly="readonly" /> <a onclick="show_calendar('calendarioV');" style="cursor: pointer;"><small>(Seleccionar)</small></a>
    		<div id="calendarioV">
    			<?php calendar_html("calendarioV","fechaV"); ?>
    		</div>
    		<br/><br/>
	
			Clase: <select  id="id_clase" name="id_clase" >
			<option value="Economy">Economy</option>
			<option value="Primary">Primary</option>
			</select>
			<br/><br/>
	</div>			
	<!--<input type="submit" value="Buscar"> -->
	<!--<a href="javascript:validarForm();"><img src="../images/botonBuscar.png" alt="Buscar";"> -->
	<img src="../images/botonBuscar.png" alt="Buscar" onClick="javascript:validarForm();"/> <br/><br/>
</form>
<div id="pie" >
	<img alt="logo_pie" src="../images/LogoCompania_footer.PNG"/>
</div>
</body>

</html>
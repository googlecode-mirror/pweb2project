<?php
require('calendario.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<title>Reserva de Vuelos</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="javascript" type="text/javascript" src="javascript/jquery-1.3.1.min.js"></script>
	<script language="javascript" type="text/javascript" src="javascript/jquery.functions.js"></script>

</head>
<body>
<div id="cabecera" >
	<img alt="logo" src="../images/logo-american-airlines.jpg"/>
</div>
<form name="form_vuelo" method="POST" action="dias_vuelos.php">
<h1>Vuelos</h1><br/>
<div id="formulario">	
	<input type="radio" id="id_idayvuelta" name="id_idayvuelta" checked="checked">Ida y Vuelta
	<br/><br/>
	Origen: <select id="id_origen" name="id_origen">
				<option value="levanta origenes">levanta todos los origenes</option>
					<?php
				/*$con = new conectar;
				$query = "SELECT xxxxxxx";
				$res = $con->SQLExec($query,'xxxxxx');
				$cant = count($res);
				for($i=0;$i<$cant-1;$i++){
				echo "<option value = ".$res[$i][1]." >".$res[$i][1]." - ".$res[$i][0]."</option>";}*/
			?>
			</select><br/><br/>
	Destino: <select id="id_destino" name="id_destino" >
				<option value="levanta destinos">levanta todos los destinos</option>
						<?php
				/*$con = new conectar;
				$query = "SELECT xxxxxxxxxx";
				$res = $con->SQLExec($query,'xxxxxx');
				$cant = count($res);
				for $i=0;$i<$cant-1;$i++){
				echo "<option value = ".$res[$i][1]." >".$res[$i][1]." - ".$res[$i][0]."</option>";}*/
			?>
			</select><br/><br/>
	Fecha ida:<input type="text" name="fecha" id="fecha"  /> <a onclick="show_calendar('calendario');" style="cursor: pointer;"><small>(Seleccionar)</small></a>
    <div id="calendario">
    <?php calendar_html("calendario","fecha"); ?>
    </div><br/><br/>
	Fecha Vuelta: <input type="text" name="fechaV" id="fechaV"  /> <a onclick="show_calendar('calendarioV');" style="cursor: pointer;"><small>(Seleccionar)</small></a>
    <div id="calendarioV">
    <?php calendar_html("calendarioV","fechaV"); ?>
    </div><br/><br/>
	Clase: <select  id="id_clase" name="id_clase" >
				<option value="Economy">Economy</option>
				<option value="Primary">Primary</option>
			</select><br/><br/>
	Adultos: <select id="id_adulto" name="id_adulto" >
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><br/><br/>		
</div>			
	<input type="submit" value="Buscar">
</form>
</body>

</html>
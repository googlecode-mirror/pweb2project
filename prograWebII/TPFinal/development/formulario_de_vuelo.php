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
		<script language="javascript" type="text/javascript" src="../javascript/formulario_de_vuelo.js"></script>

	</head>
	<body>
		<div id="cabecera" >
			<img alt="logo" src="../images/LogoCompania_header.PNG"/>
		</div>
		<form action="vuelos_busqueda.php" name="form_vuelo" method="post" id="form_vuelo_id">
			<h1>Vuelos</h1><br/>
			<div id="formulario">
			
				<input type="radio" id="id_idayvuelta" name="id_idayvuelta" checked="checked">	
				Ida y Vuelta
			
				<br/><br/>
			
				<label for="origen">Origen:</label>
				<select id="id_origen" name=id_origen>
				<?php
					// Conectando a la base de datos
					// mi bd no tiene password!
					//$conexion  = mysql_connect("localhost", "root", "") or die("No se pudo conectar: " . mysql_error());
					//$conexion  = mysql_connect("localhost", "root", ""); 
					/* con localhost da error
					 * mysql_connect() [function.mysql-connect]: 
					 * [2002] A connection attempt failed because the connected party did not 
					 * (trying to connect via tcp://localhost:3306) 
					 */ 
					$conexion  = mysql_connect("127.0.0.1", "root", "");
					if (!$conexion)
						die("No se pudo conectar a MySql: " . mysql_error());
					//else 	
						//echo "Se conect&#243; a MySql. Identificador de enlace de MySQL: $conexion \n";
					
					// Seleccionando la base de datos
					
					if(!mysql_select_db("tp_pWeb_database"))
						die("No se pudo seleccionar la base de datos");
					//else
						//echo "\nSe seleccion&#243; una base de datos.\n";

					// Armo la consulta en una variable string 
					$consulta  = "select c_cod, c_desc from ciudad";
					
					//echo "La consulta que haremos ser&#225;: $consulta \n";
					
					//Ejecuto la consulta
 					$result = mysql_query($consulta);
					if (!$result) {
						die('Consulta no válida: ' . mysql_error());
					}//else 
						//echo "Se ejecut&#243; la consulta correctamente: $result \n";
					
					//Cantidad de filas retornadas por la consulta
					$numero_filas = mysql_num_rows($result);
					//echo "Se recuperaron $numero_filas Filas\n";
 					
					//echo "<option> </option>"; //primer opcion vacia
					if($result!=NULL){
						if(mysql_num_rows($result)>0){
							while( $row=mysql_fetch_array($result) ){
								//here you can work with the results... 12
								//echo "c_cod: ".$row['c_cod']." c_desc: ".$row['c_desc'];
								echo "<option value=\"".$row['c_cod']."\"".">".$row['c_desc']."</option>";
							}
						}//else{
							//no results, you can put a message here...
						//}
						mysql_free_result($result);
					}					
					// Cerrar la conexión
					mysql_close($conexion);
				?>
				</select>
			    <br/><br/>	
			    
				<label for="destino">Destino:</label>
				<select id="id_destino" name="id_destino" >
					<option value=""></option>
					<?php
					    include("../classes/mysql.php");
					    $db = new MySQL();						
						// Armo la consulta en una variable string 
						$consulta  = "select c_cod, c_desc from ciudad";						 
					    $result = $db->consulta("select c_cod, c_desc from ciudad");
					    if($result!=NULL){
					    	if(mysql_num_rows($result)>0){
					    		while( $row=mysql_fetch_array($result) ){
					    			echo "<option value=\"".$row['c_cod']."\"".">".$row['c_desc']."</option>";
					    		}
					    	}
					    	$db -> freeResult($result);
					    }
					    // Cerrar la conexión					    
					    $db ->closeConection();					    	
					?>
				</select>
				<br/><br/>
			
			    <label for="fecha_ida">Fecha ida:</label>
				<input type="text" name="fecha_ida" id="fecha_ida" readonly="readonly"/> 
				<a onclick="show_calendar('calendario');" style="cursor: pointer;">
					<small>(Seleccionar)</small>
				</a>
    		
    			<div id="calendario">
    				<?php calendar_html("calendario","fecha"); ?>
    			</div>
    		
    			<br/><br/>
			
			    <label for="fecha_vuelta">Fecha Vuelta:</label>
				<input type="text" name="fecha_vuelta" id="fecha_vuelta" readonly="readonly"/> 
				<a onclick="show_calendar('calendarioV');">
					<small>(Seleccionar)</small>
				</a>
    			<div id="calendarioV">
    				<?php calendar_html("calendarioV","fechaV");?>
    			</div>
    			<br/><br/>
	
				<label for="id_clase">Clase:</label>
				<select  id="id_clase" name="id_clase" >
				<option value="Economy">Economy</option>
					<option value="Primary">Primary</option>
				</select>
				<br/><br/>
			</div>			
			<img src="../images/botonBuscar.png" alt="Buscar" id="boton_buscar_id"/>
			<br/><br/>
		</form>
		<div id="pie" >
			<img alt="logo_pie" src="../images/LogoCompania_footer.PNG"/>
		</div>			
	</body>
</html>	

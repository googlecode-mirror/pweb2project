<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Dias de Vuelos</title>
	</head>
	<body>
	<?php
	    //echo $_POST;
		//echo $_GET;
		//$idayvuelta=$_POST['id_idayvuelta'];
		  $origen=$_POST['id_origen'];
	     //$origen=$_GET['id_origen']; //para ver los parametros desde la url :)
	      
		/*		 
		$destino=$_POST['id_destino'];
		$fechaIda=$_POST['fecha'];
		$fechaVuelta=$_POST['fechaV'];
		$clase=$_POST['id_clase'];
		
		
		echo "Ida y vuelta:"; echo $_POST['id_idayvuelta']; echo "<br/>";
		echo "Origen: "; echo $_POST['id_origen']; echo "<br/>";
		echo "Destino: "; echo $_POST['id_destino']; echo "<br/>";
		echo "Fecha de Ida: "; echo $_POST['fecha']; echo "<br/>";
		echo "Fecha de Vuelta: "; echo $_POST['fechaV']; echo "<br/>";
		echo "Clase: "; echo $_POST['id_clase']; echo "<br/>";
	    */
	      
	    /*
	     * Buscamos en bd si hay vuelos disponibles segun los parametros ingresados
	     */ 
	      echo "</br>";
	      echo "Buscando vuelos con los parametros ingresados...";
	      echo "</br>";
	      echo "origen: $origen \n";
	      //acceso a bd y ejecucion de la consulta
	      $conexion  = mysql_connect("127.0.0.1", "root", "");
	      if (!$conexion)
	      	die("No se pudo conectar a MySql: " . mysql_error());

	      if(!mysql_select_db("tp_pWeb_database"))
	      	die("No se pudo seleccionar la base de datos");

	      // Armo la consulta en una variable string
	      // TO_DO esta consulta deberá incluir todos los parametros ingresados
	      $consulta  = "select * from cronograma where c_origen = \"$origen\" ";
	      	
	      //Ejecuto la consulta
	      $result = mysql_query($consulta);
	      if (!$result) {
	      	die('Consulta no válida: ' . mysql_error());
	      }
	      	      	
	      //Cantidad de filas retornadas por la consulta
	      $numero_filas = mysql_num_rows($result);
	       
	      if($result!=NULL){
	      	if(mysql_num_rows($result)>0){
// 	      		while( $row=mysql_fetch_array($result) ){
// 	      			//echo "c_cod: ".$row['c_cod']." c_desc: ".$row['c_desc'];
	      			
// 	      			echo "<option value=\"".$row['c_cod']."\"".">".$row['c_desc']."</option>";
// 	      		}
                echo "</br>";
	      		echo "Hay Vuelos!";
	      	}
	      	mysql_free_result($result);
	      }
	      // Cerrar la conexión
	      mysql_close($conexion);
	?>
 	</body>
</html>
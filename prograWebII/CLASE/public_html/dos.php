<HTML>
<BODY>
<?PHP
    //$edad=$_REQUEST['edad']; //tomar el parametro del request
    //$edad=$_GET['edad'];
      $edad=$_POST['edad'];
	//print ("La edad es: $edad");
    echo "La edad es $edad";
    echo "</br>";
	  
	$cadena = $_POST['cadena'];
	//print ("La cadena introducida es: $cadena");
	echo "La cadena introducida es: $cadena";
	echo "</br>";
		
	$sexo = $_POST['sexo'];
	echo "Sexo: $sexo";
	
	echo "</br>";
	$extras = $_POST['extras'];
	foreach ($extras as $extra)
		print ("$extra<BR>\n");
			
	
	echo "</br>";
	$actualizar = $_POST['actualizar'];
	if ($actualizar)
		print ("Se han actualizado los datos");
	
	echo "</br>";
	$idiomas = $_POST['idiomas'];
	foreach ($idiomas as $idioma)
		print ("$idioma<BR>\n");
	
	/*
	 para evitar preguntar por variales indefinidas 
	 */
	if (     
			//(exist ) //ver la documentacion ... como es la sintaxis del exist??
			//&&
			(isset($_POST["datos"])) //si la variable esta seteada
        )
		echo "La variable -datos- esta seteada";
    else 

    	echo "La variable -datos- NO esta seteada";
    //inline if    
?>
</BODY>
</HTML>
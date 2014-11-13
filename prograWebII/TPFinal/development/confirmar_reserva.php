<html>
<head>
<title> Confirmar reserva </title> <!-- utilizo los datos de dias_vuelos.php -->

<script language="javascript" type="text/javascript">
function validar(){
if (document.reserva.tilde.checked) {
	document.reserva.submit(); 
     }
	 else{
	 alert("No se aceptaron los terminos y condiciones para realizar la reserva");
	  document.reserva.tilde.focus();
       return false; 
	 }

}
</script>
</head>

<body>
<div id="cabecera" >
	<img alt="logo" src="../images/LogoCompania_header.PNG"/>
</div>
<h2><b>Confirmaci&oacute;n de Reserva </b></h2> 
<b>Acepte las condiciones y continue con la compra</b>
REVISION DEL ITINERARIO
<div id="itinerario">
<?php
	echo "SALIDA" ; echo "<br/>";
	echo "Fecha: "; echo $_POST['fechaIda']; echo "<br/>"; 
	echo "Desde: "; echo $_POST['$origen']; echo "<br/>";
	echo "Hasta: "; echo $_POST['id_destino']; echo "<br/>";
	echo "Clase: "; echo $_POST['id_clase']; echo "<br/>";
	echo "<br/>";
	echo "REGRESO"; echo "<br/>";
	echo "Fecha: "; echo $_POST['fechaV']; echo "<br/>";
	echo "Desde: "; echo $_POST['id_destino']; echo "<br/>";
	echo "Hasta: "; echo $_POST['$origen']; echo "<br/>";
	echo "Clase: "; echo $_POST['id_clase']; echo "<br/>";
	echo "<br/>";
	echo "PASAJERO:";      echo "<br/>";
	echo $_POST['nombre']; echo " "; echo $_POST['apellido']; echo "<br/>";
	echo "DNI: ";          echo $_POST['dni']; echo "<br/>";
	echo "<br/>";
	echo "DETALLE DEL TOTAL A PAGAR"; echo "<br/>";    // extraer los datos de la base de datos y realizar los calculos
	echo "Tarifa Base:     ";      echo "$....."; echo "<br/>"; 
	echo "Tasas e Impuestos:  ";   echo "$....."; echo "<br/>";
	echo "Descuentos: ";          echo "$....."; echo "<br/>";
	echo "Servicios Adicionales: "; echo "$....."; echo "<br/>";

	echo "TOTAL"; echo "$....."; echo "<br/>";
?>
</div>

<div id="formulario">

<form name="reserva" method="post" action="codigo_reserva.php" onsubmit="return validar();">
	<INPUT TYPE="checkbox" NAME="tilde" id="tilde" VALUE="1"/> <b> He leido y acepto las condiciones de las tarifas y el equipaje permitido </b>
	<INPUT TYPE="submit" VALUE="Continuar"/>
	
 <br>
</form>
<form name="cancelar" action="formulario_de_vuelo_old.php">
<INPUT TYPE="submit" VALUE="Cancelar"/>
</form>
</div>	

<div id="pie" >
			<img alt="logo_pie" src="../images/LogoCompania_footer.PNG"/>
</div>		

</body>

</html>

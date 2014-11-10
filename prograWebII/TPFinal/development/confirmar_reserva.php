<html>
<head>
<title> Confirmar reserva </title> <!-- utilizo los datos de dias_vuelos.php -->

<script language="javascript" type="text/javascript">
  // validar que se tilde "aceptar condiciones"
</script>
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

echo "REGRESO"; echo "<br/>";
echo "Fecha: "; echo $_POST['fechaV']; echo "<br/>";
echo "Desde: "; echo $_POST['id_destino']; echo "<br/>";
echo "Hasta: "; echo $_POST['$origen']; echo "<br/>";
echo "Clase: "; echo $_POST['id_clase']; echo "<br/>";

echo "PASAJERO:";      echo "<br/>";
echo $_POST['nombre']; echo " "; echo $_POST['apellido']; echo "<br/>";
echo "DNI: ";          echo $_POST['dni']; echo "<br/>";

echo "DETALLE DEL TOTAL A PAGAR"; echo "<br/>";
echo "Tarifa Base:     ";      echo "$....."; echo "<br/>"; 
echo "Tasas e Impuestos:  ";   echo "$....."; echo "<br/>";
 echo "Descuentos: ";          echo "$....."; echo "<br/>";
 echo "Servicios Adicionales: "; echo "$....."; echo "<br/>";

echo "TOTAL"; echo "$....."; echo "<br/>";
?>
<form name="reserva" method="post" action="tiket.pdf" onsubmit="return validar(this);">   
<b> He leido y acepto las condiciones de las tarifas y el equipaje permitido </b>
<!-- ordenar comentarios y boton 'continuar'-->
<div id="formulario">	

<form>


<INPUT TYPE="submit" VALUE="Continuar" name="enviar" onclick="validar();"/>
 <br>
</div>	
</FORM>
</form>

</body>
<!--Boton continuar--- imprimir boleto pdf -->
</html>

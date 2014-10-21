<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Dias de Vuelos</title>
</head>
<body>
<?php
$idayvuelta=$_POST['id_idayvuelta'];
$origen=$_POST['id_origen'];
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

?>


</body>
</html>
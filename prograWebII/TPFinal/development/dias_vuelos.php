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
$clase=$_POST['id_clase'];
$adulto=$_POST['id_adulto'];

echo "Ida y vuelta:"; echo $_POST['id_idayvuelta']; echo "<br/>";
echo "Origen: "; echo $_POST['id_origen']; echo "<br/>";
echo "Destino: "; echo $_POST['id_destino']; echo "<br/>";
echo "Clase: "; echo $_POST['id_clase']; echo "<br/>";
echo "Adultos: "; echo $_POST['id_adulto']; echo "<br/>";
?>


</body>
</html>
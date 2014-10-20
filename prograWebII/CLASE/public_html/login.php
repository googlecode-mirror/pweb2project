<?php
	session_start(); /*iniciamos la sesion*/
	
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	
	//if(consultar_usuario_valido($name, $pass)){
	if($name=="ire" && $pass=="123"){
		$_SESSION['idUsuario']=$name;
		//redirect_principal();
		echo "Hola usuario:$name";
	}else{
		//redirect_index();
		echo "NO existe el usuario!";
	}
	
?>
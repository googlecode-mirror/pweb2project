<?php
 session_start();
 
 if(!isset($_SESSION['idUsuario'])){
 	redirect_index();
 }
?>
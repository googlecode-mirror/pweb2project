<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Formulario 1</title>
</head>
<body>
<form action="login.php" method="POST">
	
<p>user</p>
<input type="text" name='user'/>
	
<p>password</p>
<input type="password" name='pass'/>
	
<input type="submit" name="login"></input>
</form>
</body>
</html>
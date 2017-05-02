<?php
	//session_start();
	if(isset($_SESSION["id"]))
		echo "Bienvenido Sr(a) ".$_SESSION["user"]." no olvide <a href='desconectar.php'>Cerrar sesion</a> al abandonar el sitio"; 
	else
		echo'
			<form name="frmIden" method="POST" action="login.php">
				<label>Nombre de usuario:</label>
				
				<input type="text" name="user" placeholder="Intr. su Usuario">
				<label>Contrase&ntilde;a</label>
				
				<input type="password" name="pass">
				
				<input type="submit" name="btn" value="Login">
			</form>';
?>
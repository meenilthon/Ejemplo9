<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
  </head>
  <body>  
  <table border="1">
<form name="frmModificar" action="updateLibro.php" method="POST">
	<input type="hidden" 
	value=<?php echo $_GET["codLib"]; ?>
	name="codLib" >
	<tr>
		<td><label>titulo</label></td>
		<td><input type="text" value=<?php echo $_GET["tituloLibro"]; ?> name="tituloLibro"></td>
	</tr>
	<tr>
		<td><label>Fecha de publicacion</label></td>
		<td><input type="text" value=<?php echo $_GET["fechaPubli"]; ?> name="fechaPubli"></td>
	</tr>
	<tr>
		<td><label>Codigo autor</label></td>
		<td><input type="text" value=<?php echo $_GET["codAut"]; ?> name="codAut"></td>
	</tr>
	<tr>
		<td><label>&nbsp;</label></td>
		<td><input type="submit" name="btn" value="Guardar"></td>
	</tr>	
</form>
</table>
</body>
</html>
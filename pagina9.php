<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
  </head>
  <body>  
    <table border="1">
	<tr>
		<th>Codigo del libro</th>
		<th>Titulo</th>
		<th>Fecha de publicacion</th>
		<th>Codigo del autor</th>
	</tr>
<?php
	$link=mysqli_connect("localhost","root","","prueba");
	//mysql_select_db("prueba",$link);
	$query="SELECT * FROM libro";
	$table=mysqli_query($link,$query);
	while($row=mysqli_fetch_array($table))
	{
		printf("<tr>
					<td>%s</td>
					<td>%s</td>
					<td>%s</td>
					<td>%s</td>
					<td><a href='modificaLibro.php?codLib=%s&tituloLibro=%s&fechaPubli=%s&codAut=%s'>Modificar</a></td>
					<td><a href='#'>Eliminar</a></td>
				</tr>",$row[0],$row[1],$row[2],$row[3],$row[0],$row[1],$row[2],$row[3]);
	}
	mysqli_free_result($table);
	mysqli_close($link);
	//echo date("j-n-Y");
?>
	<tr>
		<td colspan="6"><a href='anadirLibro.php'>A&ntilde;adir libro</a></td>
	</tr>
</table>
</body>
</html>
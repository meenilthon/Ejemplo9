<form name="frmFiltro" method="GET" action="index.php">
	<input value="2" name="pagina" type="hidden">
	<label>Fitrar por titulo</label>
	<input type="text" name="dato">
	<input type="submit" name="btn" value="Buscar Numero"> 
	<input type="submit" name="btn" value="Buscar Nombre"> 
</form>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Numero</th>
		<th>Nombre o Razon Social</th>
		<th>Direccion</th>
	</tr>

<?php

	$link=mysqli_connect("localhost","root","123","inf636");

	$query="SELECT * FROM telefonos where 1=2";

	if(isset($_GET["btn"]))
	{
			if($_GET["btn"] == "Buscar Numero")
				$query = "select * from telefonos where numero ='".$_GET['dato']."'";
			elseif($_GET["btn"] == "Buscar Nombre")
				$query = "select * from telefonos where nombre_razon like('".strtoupper($_GET['dato'])."%') ";
				
	}

	
	$table=mysqli_query($link,$query);
	while($row=mysqli_fetch_array($table))
	{
		printf("<tr class='fila'> <td>%s</td> <td>62-%s</td> <td>%s</td> <td>%s</td>",$row[0],$row[1],$row[2],$row[3]);


		if(isset($_SESSION["type"]))
		{
			if($_SESSION["type"]==1)
			{
				printf("<td><a href='index.php?pagina=4&id=%s&numero=%s&nombre=%s&direccion=%s'>Modificar</a></td>", $row[0], $row[1],  $row[2], $row[3]);
				printf("<td><a href='index.php?pagina=5&id=%s&numero=%s'>Eliminar</a></td></tr>",$row[0],$row[1]);
			}
			else
				print("</tr>");
		}
	}
	mysqli_free_result($table);
	mysqli_close($link);
	//echo date("j-n-Y");
		if(isset($_SESSION["type"]))
		{
			if($_SESSION["type"]==1)//admin
				echo "<tr><td colspan='6'><a href='anadirLibro.php'>a&ntilde;adir Libro</a></td></tr>";
		}
	?>
</table>
<?php
	if(isset($_GET['id']))
	{
		printf("Esta seguro de eliminar
		el registro con el numero (<em> 62-%s </em>)
		[ <a href='deleteLibro.php?id=%s'>Estoy seguro(a)</a> -
		<a href='index.php'>Retornar</a>]",
		$_GET['numero'], $_GET['id']);
	}
	else
		header("Location:index.php");
?>

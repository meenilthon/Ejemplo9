<?php
	if(isset($_POST["tituloLibro"]))
	{
		$link=mysqli_connect("localhost","root","","prueba");
		$query="INSERT INTO libro(titulo,fechaPubli,codAut) VALUES('".$_POST["tituloLibro"]."','".$_POST["fechaPubli"]."',".$_POST["codAut"].")";
		$result=mysqli_query($link,$query);
	}
	Header("Location:pagina9.php");
?>
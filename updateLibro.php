<?php
	if(isset($_POST["codLib"]))
	{
		$link=mysqli_connect("localhost","root","","prueba");
		$query="UPDATE libro SET
		titulo='".$_POST["tituloLibro"]."',
		fechaPubli='".$_POST["fechaPubli"]."',
		codAut='".$_POST["codAut"]."'
		WHERE codLib=".$_POST["codLib"];
		// echo $query;	
		$result=mysqli_query($link,$query);
	}
	Header("Location:pagina9.php");
?>
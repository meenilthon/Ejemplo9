<?php
	if(isset($_GET["id"]))
	{
		$link=mysqli_connect("localhost","root"," ","prueba");
		$query="delete from libros WHERE id=".$_GET['id'];
		//echo $query;
	    $result=mysqli_query($link,$query);
	}	
	Header("Location:index.php");
?>
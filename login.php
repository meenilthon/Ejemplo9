<?php
session_start();


	if(isset($_POST["btn"]))
	{
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		$link = mysqli_connect("localhost","root", "123","inf636");
		
		$query = "select * from usuario where user='".$user."' AND password='".$pass."'";

		$table = mysqli_query($link,$query);

		$row=mysqli_fetch_array($table);

		$cantidad=mysqli_num_rows($table);

		if($cantidad>0){
			
			$_SESSION["id"]=$row["id"];
			$_SESSION["user"]=$row["user"];
			$_SESSION["type"]=$row["type"];

			switch($row["type"]){
				case 1: header("Location: index.php"); break;
				case 2: header("Location: index.php"); break;
			}
		}
		else{
			header("Location: index.php");
		}
	}
?>
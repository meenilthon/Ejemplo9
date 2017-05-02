<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Biblioteca</title>
		<style type="text/css">
		.fila{
			background-color: red;
		}
		.fila:hover{
			background-color: orange;

		}
		</style>
	</head>
	<body>
		<header style="background:skyblue;padding:30px;">
			<?php
				include("identificacion.php");
			?>
		</header>
		<section style="background:rgba(255,0,0,.3);padding:30px;">
			<?php

				if( isset($_GET["pagina"]) )
				{
					switch ($_GET["pagina"]) {
						case 1:
						include("pagina9.php");
						break;
						case 2:
						include("pagina10.php");
						break;
						case 3:
						include("anadirLibro.php");
						break;
						case 4:
						include("modificaLibro.php");
						break;
						case 5:
						include("consultaeliminacion.php");
						break;
						default:
						include("pagina9.php");
						break;
					}
				}
				else
					include("pagina9.php");
			?>
		</section>
	</body>
</html>
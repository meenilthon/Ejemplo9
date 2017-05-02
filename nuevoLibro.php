<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Gestion de libros</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="bower_components/datepicker/css/datepicker.css" rel="stylesheet">
    <style>
		.datepicker{z-index:1151 !important;}
	</style>
  </head>
  <body>
    <h1>Gesti&oacute;n de libros</h1>

	<table  class="table table-striped">
		<tr>
			<th>Codigo del libro</th>
			<th>Titulo</th>
			<th>Fecha de publicacion</th>
			<th>Codigo del autor</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php
			$link=mysqli_connect("localhost","root","root","prueba");
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
							<td><button type='button' class='btn btn-warning'>Modificar</button></td>
							<td><button type='button' class='btn btn-danger'>Eliminar</button></td>
						</tr>",$row[0],$row[1],$row[2],$row[3]);
			}
			mysqli_free_result($table);
			mysqli_close($link);
			//echo date("j-n-Y");
		?>
		<tr>
			<td colspan="6">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  		A&ntilde;adir libro
				</button>
			</td>
		</tr>
	</table>
    <!-- Button trigger modal -->
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">A&ntilde;adir nuevo libro</h4>
	      </div>
	      <div class="modal-body">
			<form id="formulario" method="POST" action="registraLibro.php">
			  <div class="form-group">
			    <label for="tituloLibro">Titulo del libro</label>
			    <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Titulo del libro">
			  </div>
			  <div class="form-group">
			    <label for="fechaPubli">Fecha de publicacion</label>
			    <input class="form-control" id="fechaPubli" name="fechaPubli" type="text">
			  </div>
			  <div class="form-group">
			    <label for="codAut">Codigo de autor</label>
			    <input type="text" class="form-control" id="codAut" name="codAut" placeholder="Codigo de autor">
			  </div>
			  <button type="submit" class="btn btn-default">Guardar libro</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="transacciones.js"></script>
    <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                $('#fechaPubli').datepicker({
                    format: "yyyy-mm-dd"
                });  
            });
    </script>
  </body>
</html>
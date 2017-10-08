
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
  		</header>
		<nav>
			<ul class ="navbar list-unstyled">
				<li>
					<a href="index.php"><img src="img/home3.png"> Inicio</a>
				</li>
				<li>
					<a href="problema1.php">Problema N°1</a>
				</li>
				<li>
					<a href ="problema5.php">Problema 5</a>
				</li>
				<li>
					<a href = "problema6.php">Problema 6</a>
				</li>
				<li>
					<a href ="problema7.php">Problema 7</a>
				</li>
				<li>
					<a href ="problema8.php">Problema 8</a>
				</li>
			</ul>
		</nav>
		<div class ="container">
			<div class = "row">
					<div class ="col-sm-10">
						<section>
<?php


if(isset($_POST["action"]))
{
	$action = $_POST["action"];
	$notas  = $_POST['nota'];

	echo "<h3>Resultados de los cálculos</h3>";
	


}

switch($action)
{
	case "run":
		run();
		break;
	default:
		def();	
		break;
}

function run()
{
	global $notas;

	$minvalue = min($notas);
	echo "La notas mas baja fue: $minvalue<br>";

	$maxvalue = max($notas);
	echo "La notas mas alta fue: $maxvalue<br>";
	
	$promedio = array_sum($notas)/count($notas);
	echo "El promedio de notas es: $promedio<br>";

}


function def()
{
	echo '
		<h3>Problema 1</h3>
		<p> Realizar un programa que permita ingresar las calificaciones finales de un grupo de 40 alumnos. El programa deberá calcular la calificación promedio, la calificación más alta y la calificación mas baja de todo el grupo.</p>

		<form method="POST">
		<input type ="hidden" name="action" value="run">';	

	for($i=0;$i<40;$i++)
	{
		echo'<label>Estudiante '.($i+1).  '</label><input type="text" name="nota[]" placeholder="nota" required><br>';
	}	
	
		echo '<input type="submit" value="Siguiente"></form>';

}

?>


						</section>
					</div>
					<div class ="col-sm-2">
							<aside>
								<div class ="form-box">
									<form>
										<div class="form-group">
											<label>Buscar:</label>
											<input class="form-control" type="text">
										</div>
										<input class ="btn" type ="submit" value="Buscar">
									</form>
								</div>
								<br>
								<div>
										<h5>Patrocinadores</h5>
										<h6>Google</h6>
										<img class="img-responsive" src="img/google.png">
										<h6>Wikipedia</h6>
										<img class ="img-responsive" src="img/wiki.png">
								</div>
								<br>
							</aside>
					</div>
			</div>
</div>
			<footer class="footer">
				<div class="container">
					<p >	Creado por: Roderik Acevedo 8-906-2070, Roy Henriquez 8-928-1689,Carlos Tuñón  8-916-809, Grupo: 1SF-131</p>
				</div>
			</footer>
</body>
</html>

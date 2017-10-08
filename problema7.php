
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
					<a href = problema1.php>Problema 1</a>
				</li>
				<li>
					<a href = problema5.php>Problema 5</a>
				</li>
				<li>
					<a href = problema6.php>Problema 6</a>
				</li>
				<li>
					<a href = problema7.php>Problema 7</a>
				</li>
				<li>
					<a href =problema8.php>Problema 8</a>
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
}

switch($action)
{
	case "analyze":
		analyze();
		break;
	default:
		def();	
		break;
}

function analyze()
{
	$time = array();
	$qualified = TRUE;
	for($i = 0; $i<count($_POST["hour"]);$i++)
	{
		$cTime = intval($_POST["hour"][$i])*3600+intval($_POST["minute"][$i])*60+intval($_POST["second"][$i]);
		if($cTime>960)
		{
			$qualified = FALSE;
			break;
		}
		array_push($time,$cTime);
	}
	if($qualified)
	{
		
	 if(min($time)>900)
	 {
	 	$qualified = FALSE;
	 }
	 if($qualified)
	 {
		 if(average($time)>900)
		 {
		 	$qualified = FALSE;
		 
		 }
	 }
	}
	if($qualified)
	{
		echo 'Usted puede participar en la prueba 5k.';
	}
	else
	{
		echo 'Usted no puede participar en la prueba 5k';
	}
	




}
function def()
{
	echo '
		<h3> Problema 7</h3>
		<p>Un entrenador le ha propuesto a un atleta recorrer una ruta de 5k durante 10 dias, para determinar si es apto para la prueba de 5k o debe buscar otra especialidad. Para considerarlo apto debe cumplir por lo menos una de las siguientes condiciones:</p>
		<ol>
			<li>Que en ninguna de las pruebas haga un tiempo mayor a 16 minutos</li>
			<li>Que al menos en una de las pruebas realice un tiempo menor a 15 minutos</li>
			<li>Que su promedio de tiempo sea menor o igual a 15 minutos.</li>
		</ol>
		<p>El programa debe indicar si el atleta es apto para participar o no para la prueba de 5k.</p>
		<form method="POST">
		<input type ="hidden" name="action" value="analyze">
	';	
	for($i=0;$i<10;$i++)
	{
		echo'<label>Dia '.($i+1).'</label><input type="text" name="hour[]" placeholder="Horas" required>:<input type="text"name="minute[]" placeholder="Minutos" required>:<input type="text" placeholder="Segundos" name="second[]"><br>';
	}	
	echo '<input type="submit" value="Siguiente"></form>';

}


	function average($arr)
{
    if (!count($arr)) return 0;

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++)
    {
        $sum += $arr[$i];
    }

    return $sum / count($arr);
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

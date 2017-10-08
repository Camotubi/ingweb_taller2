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
	case "setN":
		if(isset($_POST["n"]) && !empty($_POST["n"]))
		{
			printCellsInput(intval($_POST["n"]));
		}
		break;
	case "analyze":
/*  $primaria = array($_POST["primaria[]"]);
  $secundaria = array($_POST["secundaria[]"]);
  $tecnica = array($_POST["tech[]"]);
  $prof = array($_POST["pro[]"]);
  $postg = array($_POST["post[]"]);*/
		analyze($n);
		break;
	default:
		def();
		break;
}

function printCellsInput($n)
{
	echo '<form method="POST"><table class="table table-condensed">
		<input type="hidden" name="action" value="analyze">
		<tr>
			<th>Numero de censo</th>
			<th>Primaria</th>
			<th>Secundaria</th>
			<th>Carrera Tecnica</th>
      <th>Estudios Profesionales</th>
      <th>Estudios de Postgrado</th>
		</tr>';
	for($i=0;$i<$n;$i++)
	{
		echo '
			<td><input type="text"name="nCenso[]" required></td>
			<td><input type="checkbox" name="primaria[]" value="1"></td>
			<td><input type="checkbox" name="secundaria[]" value="1"></td>
			<td><input type="checkbox" name="tech[]" value="1"></td>
      <td><input type="checkbox" name="pro[]" value="1"></td>
      <td><input type="checkbox" name="post[]" value="1"></td>

		</tr>';
	}

	echo '</table><input type="hidden" name = "n" value="'.$n.'"><input type="submit" value ="Enviar"></form>';

}


function analyze($n)
{
    $prim=100*count($_POST["primaria"])/intval($_POST["n"]);
    $sec=100*count($_POST["secundaria"])/intval($_POST["n"]);
    $tech=100*count($_POST["tech"])/intval($_POST["n"]);
    $pro=100*count($_POST["pro"])/intval($_POST["n"]);
    $post=100*count($_POST["post"])/intval($_POST["n"]);
  echo "Porcentajes:<br>";
  echo "Primaria: $prim%<br>";
  echo "Secundaria: $sec%<br>";
  echo "Carrera Tecnica: $tech%<br>";
  echo "Estudio Profesional: $pro%<br>";
  echo "Estudio de Postgrado: $post%<br>";
}

function def()
{
	echo '
		<h3> Problema 6</h3>
		<p>Al realizarse el ultimo Censo Nacional de Poblacion y Vivienda se desea obtener de N cantidad de personas que se alcance a encuestar en un dia, que porcentaje tiene estudio de primaria, secundaria, carrera tecnica, estudios profesionales y estudios de postgrado. Realice un programa que le permita calcular dicha información.</p>
		<form method="POST">
		<input type ="hidden" name="action" value="setN">
		<label>Encuestas a ingresar:</label><input type="number" name="n" required>
		<input type="submit" value="Siguiente">


		</form>
		';

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


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
					<a href = metodoGet.php>Metodo Get</a>
				</li>
				<li>
					<a href = metodoPost.php>Metodo Post</a>
				</li>
				<li>
					<a href = enviar.php>Enviar/Recibir Datos</a>
				</li>
				<li>
					<a href = formularioRespuestaMisma.php>Form respuesta misma pagina</a>
				</li>
				<li>
					<a href = formularioRespuestaOtraPagina.php>Form Respuesta otra Pagina</a>
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
		analyze();
		break;
	default:
		def();	
		break;
}

function printCellsInput($n)
{
	echo '<form method="POST"><table>
		<input type="hidden" name="action" value="analyze">
		<tr>
			<th>Numero de censo</th>
			<th>Sexo</th>
			<th>Edad</th>
			<th>Estado Civil</th>
		</tr>';
	for($i=0;$i<$n;$i++)
	{
		echo '
			<td><input type="text"name="nCenso[]" required></td>
			<td>
				<select name="sex[]" required>
					<option value="M">Masculino</option>
					<option value="F">Femenino</option>
			</select>

</td>
			<td><input type="number"name="age[]"></td>
			<td>
				<select name="civil[]" required>
					<option value="a">Soltero</option>
					<option value="b">Casado</option>
					<option value="c">Viudo</option>
					<option value="d">Divorciado</option>
				</select></td>
				
		</tr>';
	}

	echo '<input type="submit"></table></form>';

}
function analyze()
{
	$output = array();
	for($i = 0; $i<count($_POST["nCenso"]);$i++)
	{

		if(intval($_POST["age"][$i])>=18 && intval($_POST["age"][$i])<=25 && $_POST["sex"][$i]=="F" && $_POST["civil"][$i]=="a")
		{
			array_push($output,$_POST["nCenso"][$i]);
			echo $_POST["nCenso"][$i].'<br>';
		}
	}




}
function def()
{
	echo '<form method="POST">
		<input type ="hidden" name="action" value="setN">
		<input type="number" name="n" required>
		<input type="submit">
		
		
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
					<p >	Creado por: Carlos Moisés Tuñón Biddy, 8-916-809, Grupo: 1SF-131</p>
				</div>
			</footer>
</body>
</html>

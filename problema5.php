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
                <h3>Problema 5</h3>
                <p>Un teatro otorga descuentos segun la edad del cliente. Determinar la cantidad de dinero que el teatro deja de percibir por cada una de las categorias. Tomar en cuenta que los niños menores de 5 años no pueden entrar al teatro y que existe un precio unico en los asientos. Los descuentos se hacen tomando en cuenta el siguiente cuadro:</p><br>
              <center><table class="prob_5">
                  <thead>
                    <tr>
                      <th>Rango de Edades</th>
                      <th>Descuento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>5 - 14</td>
                      <td>35%</td>
                    </tr>
                    <tr>
                      <td>15 - 19</td>
                      <td>25%</td>
                    </tr>
                    <tr>
                      <td>20 - 45</td>
                      <td>10%</td>
                    </tr>
                    <tr>
                      <td>46 - 65</td>
                      <td>25%</td>
                    </tr>
                    <tr>
                      <td>66 en adelante</td>
                      <td>35%</td>
                    </tr>
                  </tbody>
                </table></center>
    <p>Precio unico de asientos: 10.00 dolares</p>

    <form class="" action="" method="post">
      <label for="">Edad:</label>
      <input type="number" name="edad" value="" min="5" placeholder="5">
      <button type="submit" name="button">Enviar</button>
    </form> <br>
    <?php
    define('price', '10');

    if (isset($_POST["edad"])) {
      if ($_POST["edad"]<5) {
        echo "Niños menores de 5 años no pueden entrar al teatro";
      }elseif ($_POST["edad"]>=5 && $_POST["edad"]<=14) {
        $resul= price - (price*0.35);
        echo "El total que tiene que pagar el cliente es: $resul dolares";
      }elseif ($_POST["edad"]>=15 && $_POST["edad"]<=19) {
        $resul= price - (price*0.25);
        echo "El total que tiene que pagar el cliente es: $resul dolares";
      }elseif ($_POST["edad"]>=20 && $_POST["edad"]<=45) {
        $resul= price - (price*0.10);
        echo "El total que tiene que pagar el cliente es: $resul dolares";
      }elseif ($_POST["edad"]>=46 && $_POST["edad"]<=65) {
        $resul= price - (price*0.25);
        echo "El total que tiene que pagar el cliente es: $resul dolares";
      }else {
        $resul= price - (price*0.35);
        echo "El total que tiene que pagar el cliente es: $resul dolares";
      }
    }else {
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

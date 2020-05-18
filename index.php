<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App - Javascript</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font/Rimouski.css">
    <link rel="stylesheet" href="style.css">
</head>
<body> 
	
	<?php include 'conex.php'; ?>

    <header class="cabeza">
        <nav class="navbar navbar-light">
            <a class="navbar-brand"><img id="arbol" src="icons/logoletra_crece.png"></a>
            <form class="form-inline" action="insert.php" method="post" id="ciuBus">
				<label>Ciudad </label>
				<select name="ciudad" id="ciudad" class="form-control">
					<option value="3117735">Madrid</option>
					<?php 
						include 'conex.php';
						$consulta = "SELECT id, ciudad FROM ciudades";
						$resultado = mysqli_query($link,$consulta);
						while ($arr = mysqli_fetch_array($resultado)) { ?>
							<option value="<?php echo $arr[0];?>">
								<?php echo $arr[1];?>
							</option>
					 <?php       }  ?>
				</select>   
                <button class="btn btn-outline-success my-2 my-sm-0" id="enviarf" type="submit">Search</button>
            </form>
        </nav>
    </header>
	
    <section class="container-fluid">
    	<div class="container">
			<br>
            <div class="row">
                <div class="col-4 conta fore">
                	<div class="">
						<div class="row app-title"><p class="">AHORA</p></div>
						<div class="row container1">
							<div class="col">
								<div class="temperature-value" id="tempact">
									<p><span>ºC</span></p>
								</div>
							</div>
							<div class="col">
								<div id="climact" class="weather-icon">
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<table width="200" border="0">
							  <tbody>
								<tr>
								  <th scope="row">Air Quality</th>
								  <td id="desact"></td>
								</tr>
								<tr>
								  <th scope="row">Min Temp</th>
								  <td id="tempmin"></td>
								</tr>
								<tr>
								  <th scope="row">Max Temp</th>
								  <td id="tempmax"></td>
								</tr>
								<tr>
								  <th scope="row">Wind Speed</th>
								  <td id="speedwindy"></td>
								</tr>
								<tr>
								  <th scope="row">Clouds</th>
								  <td id="cloud"></td>
								</tr>
								<tr>
								  <th scope="row">Rain</th>
								  <td id="volrain"></td>
								</tr>
								<tr>
								  <th scope="row">Snow</th>
								  <td id="volsnow"></td>
								</tr>
							  </tbody>
							</table>
						</div>
        			</div>					
    			</div>
				<div class="col-8">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="img/Sol22.JPG" alt="Una">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="img/Sol11.JPG" alt="Second slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="img/Sol33.JPG" alt="Third slide">
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Pa'trás</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Pa'lante</span>
					  </a>
					</div>
				</div>
				</div>
			</div>
		<br>
		<div class="row ">
			<div class="card-deck">
			  <div class="card fore">
				<div class="card-body">
				  <h5 class="card-title">Forecast1</h5>
				  <p class="card-text">
						<div class="container2">
							<div class="row app-title"><p id="fecha" class=""></p></div>
							<div class="row">
								<div class="col">
									<div class="temperature-value">
										<p>- °<span>C</span></p>
									</div>
								</div>
								<div class="col">
									<div class="weather-icon" id="clima1"> 
										<img src="icons/unknown.png" alt=""> 
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<table width="200" border="0">
								  <tbody>
									<tr>
									  <th scope="row">Air Quality</th>
									  <td id="weather1"></td>
									</tr>
									<tr>
									  <th scope="row">Min Temp</th>
									  <td>&nbsp;</td>
									</tr>
									<tr>
									  <th scope="row">Max Temp</th>
									  <td>&nbsp;</td>
									</tr>
									<tr>
									  <th scope="row">Wind Speed</th>
									  <td>&nbsp;</td>
									</tr>
									<tr>
									  <th scope="row">Clouds</th>
									  <td>&nbsp;</td>
									</tr>
									<tr>
									  <th scope="row">Rain</th>
									  <td>&nbsp;</td>
									</tr>
									<tr>
									  <th scope="row">Snow</th>
									  <td>&nbsp;</td>
									</tr>
								  </tbody>
								</table>
							</div>
						</div>					
				  </p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card fore">
				<div class="card-body">
				  <h5 class="card-title">Forecast2</h5>
				  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card fore">
				<div class="card-body">
				  <h5 class="card-title">Forecast3</h5>
				  <p class="card-text">This is a wider card with supporting text below equal height action.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card fore">
				<div class="card-body">
				  <h5 class="card-title">Forecast4</h5>
				  <p class="card-text">This is a wider card with supporting text below equal height action.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card fore">
				<div class="card-body">
				  <h5 class="card-title">Forecast5</h5>
				  <p class="card-text">This is a wider card with supporting text below equal height action.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
				
			</div>			               
		</div>

    </section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script text="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
<script text="text/javascript" src="jquery-3.4.1.js"></script>
<!--<script text="text/javascript" src="conex.js"></script>-->
<script text="text/javascript" src="weather.js"></script>



</body>
</html>

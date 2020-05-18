<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App - Javascript</title>
    <link rel="stylesheet" href="font/Rimouski.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link src="iconos.js"></link>
</head>
<body>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App - Javascript</title>
    <link rel="stylesheet" href="font/Rimouski.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link src="iconos.js"></link>
</head>
<body>
	<?php include 'conex.php'; ?>
    <nav id="principal">
            <ul>
                    <img class="crece" src="logoletra_crece2.png" alt="">
                   
                    <img class="banner" src="FotoJet.jpg" alt="">
                    <div class="buscar"> 
					<form class="example" action="/action_page.php" method="post" id="ciuBus" style="margin:auto;max-width:300px">
						<select name="ciudad" id="ciudad">
							<option value="3117735" selected>Madrid</option>
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
						<button id="enviarf" type="submit"><i class="fa fa-search"></i></button>
					</form>                      
                    </div>             
                    <img class="login" src="login.png" alt="">
                      
                  </ul>

    </nav>
        <header> 
        <div class="slideshow-container">
                
                <div class="mySlides fade">
                  
                  <img class=photos src="dubai.jpg" style="border-radius: 20px 20px 20px 20px" >
                  
                </div>
                
                <div class="mySlides fade">
                  
                  <img  class=photos src="carretera.jpg" style="border-radius: 20px 20px 20px 20px">
                  
                </div>
               
                <div  class="mySlides fade">
                  
                  <img   class=photos src="bosque.jpg" style="border-radius: 20px 20px 20px 20px">
                  
                </div>
                
                              
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
    
    
                <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                          showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                          showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("dot");
                          if (n > slides.length) {slideIndex = 1}    
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                              slides[i].style.display = "none";  
                          }
                          for (i = 0; i < dots.length; i++) {
                              dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                        }
                        </script>

    
<!-- Pronostico actual-->
    <div class="container">
        <div class="app-title">
            <p>Clima Actual</p>
        </div>
        <div class="notification"></div>
        <div class="weather-container">
            <div id= "fecha"></div>
            <div id="climact" class="weather-icon"> 
               <img src="icons/unknown.png" alt=""> 
            </div>
            <div id="tempact" class="temperature-value">
                
            </div>
            <div id="desact" class="temperature-description">
                <p></p>
            </div>
            <div class="location">
                <p></p>
            </div class="datos">
            <div> 
            <div id="tempmin"></div>
            <div id="tempmax"></div>
            <div id="speedwindy"></div>
            <div id="cloud"></div>
            <div id="volrain"></div>
            <div id="volsnow"></div>

        </div>
        </div>

    </div>
</header>

<br>
<br>
<br>
</hr>

<H1>PRONOSTICOS ULTIMOS 5 DIAS</H1>
<img src="" alt="">
<section> 
        <div id="contenedor">
        <!-- Dia 1 --> 
        <div id="dia1"> 
                <div class="app-title pronos">
                    <p>Clima</p>
                </div>
                <div class="weather-container1">
                    <div id="fechafore"></div>
                    <div id="clima1" class="weather-icon1"> 
                            <img src="icons/unknown.png" alt=""> 
                         </div>
                    <div id="temperature-value1">
                      
                    </div>
                    <div id="weather1" class="temperature-description1">
                        <p></p>
                    </div>
                    <div id="tempminFore"></div>
                    <div id="tempmaxFore"></div>
                    <div id="speed"> </div>
                    <div id="nubes"></div>
                    <div id="lluvia"></div>
                    <div id="nieve"></div>
                </div>
            </div>
                

            
            <!-- Dia 2 -->
        <div id="dia2"> 
                <div class="app-title pronos">
                    <p>Clima</p>
                </div>
                <div class="weather-container1">
                    <div id="fechafore2"></div>
                    <div id="clima2" class="weather-icon1"> 
                            <img src="icons/unknown.png" alt=""> 
                         </div>
                    <div id="temperature-value2">
                      
                    </div>
                    <div id="weather2" class="temperature-description2">
                        <p></p>
                    </div>
                    <div id="tempminFore2"></div>
                    <div id="tempmaxFore2"></div>
                    <div id="speed2"> </div>
                    <div id="nubes2"></div>
                    <div id="lluvia2"></div>
                    <div id="nieve2"></div>
                </div>
            </div>




              <!-- Dia 3 -->
        <div id="dia3"> 
                <div class="app-title pronos">
                    <p>Clima</p>
                </div>
                <div class="weather-container1">
                    <div id="fechafore3"></div>
                    <div id="clima3" class="weather-icon1"> 
                            <img src="icons/unknown.png" alt=""> 
                         </div>
                    <div id="temperature-value3">
                      
                    </div>
                    <div id="weather3" class="temperature-description3">
                        <p></p>
                    </div>
                    <div id="tempminFore3"></div>
                    <div id="tempmaxFore3"></div>
                    <div id="speed3"> </div>
                    <div id="nubes3"></div>
                    <div id="lluvia3"></div>
                    <div id="nieve3"></div>
                </div>
            </div>
       


                <!-- Dia 4 -->
        <div id="dia4"> 
                <div class="app-title pronos">
                    <p>Clima</p>
                </div>
                <div class="weather-container1">
                    <div id="fechafore4"></div>
                    <div id="clima4" class="weather-icon1"> 
                            <img src="icons/unknown.png" alt=""> 
                         </div>
                    <div id="temperature-value4">
                      
                    </div>
                    <div id="weather4" class="temperature-description4">
                        <p></p>
                    </div>
                    <div id="tempminFore4"></div>
                    <div id="tempmaxFore4"></div>
                    <div id="speed4"> </div>
                    <div id="nubes4"></div>
                    <div id="lluvia4"></div>
                    <div id="nieve4"></div>
                </div>
            </div>



             <!-- Dia 5 -->
        <div id="dia5"> 
                <div class="app-title pronos">
                    <p>Clima</p>
                </div>
                <div class="weather-container1">
                    <div id="fechafore5"></div>
                    <div id="clima5" class="weather-icon1"> 
                            <img src="icons/unknown.png" alt=""> 
                         </div>
                    <div id="temperature-value5">
                      
                    </div>
                    <div id="weather5" class="temperature-description5">
                        <p></p>
                    </div>
                    <div id="tempminFore5"></div>
                    <div id="tempmaxFore5"></div>
                    <div id="speed5"> </div>
                    <div id="nubes5"></div>
                    <div id="lluvia5"></div>
                    <div id="nieve5"></div>
                </div>
            </div>
       
        
            
        </section>

       
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
             <script text="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
            <script text="text/javascript" src="jquery-3.4.1.js"></script>
            <script text="text/javascript" src="conex.js"></script>
            <script text="text/javascript" src="weather1.js"></script>
    </body>
    </html>


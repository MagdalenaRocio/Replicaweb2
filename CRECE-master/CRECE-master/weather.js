 //PRONÓSTICO ACTUAL
 $(document).ready(function(){
	 
	
		 $("#ciudad").change(function(){
		console.log(1);
		$("#ciudad option:selected").each(function(){
			var city = $(this).val();
		})
			 
		$.ajax({
			url: "http://api.openweathermap.org/data/2.5/weather?id="+city+"&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
			datatype : "json",
			type: "GET",

			success: function (respuesta) {
			  console.log(respuesta);
			  $("#climact").html(`<img src="icons/${respuesta.weather[0].icon}.png"/>`);
			  $('#desact').html(respuesta.weather[0].description);
			  $("#tempact").html(Math.floor(respuesta.main.temp) + "<br>"); 
			  $("#tempmin").html(respuesta.main.temp_min + "<br>");
			  $("#tempmax").html(respuesta.main.temp_max + "<br>");
			  $("#speedwindy").html(respuesta.wind.speed + "<br>");
			  $("#cloud").html(respuesta.clouds.all+ "%" + "<br>");
			  $("volrain").html(respuesta.rain1h + "<br>");
			  $("volsnow").html(respuesta.snow1h + "<br>");

			},
			error: function (jqXHR, textStatus, errorThrown){
			  console.log("ERROR :  " + errorThrown);
			}  
      });
		 });
		 console.log(city);
  });



  //dia 1 iconos
  $(document).ready(function(){
    $.ajax({
        url: "http://api.openweathermap.org/data/2.5/forecast?id=3117735&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
        datatype : "json",
        type: "GET",

        success: function (respuesta) {
          console.log(respuesta);
                            
         $("#clima1").html(`<img src="icons/${respuesta.list[0].weather[0].icon}.png"/>`);
         $('#weather1').html(respuesta.list[0].weather.description);

         
        },
        error: function (jqXHR, textStatus, errorThrown){
          console.log("ERROR :  " + errorThrown);
        }

        
      });

  });


  //dia  2  iconos
  $(document).ready(function(){
    $.ajax({
        url: "http://api.openweathermap.org/data/2.5/forecast?id=3117735&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
        datatype : "json",
        type: "GET",

        success: function(respuesta) {
          console.log(respuesta);
                    
         $("#clima2").html(`<img src="icons/${respuesta.list[10].weather[0].icon}.png"/>`);
         $('#weather2').html(respuesta.list[10].weather.description);
        
        },
        error: function (jqXHR, textStatus, errorThrown){
          console.log("ERROR :  " + errorThrown);
        }

        
      });

  });

  

    //dia 3 iconos
    $(document).ready(function(){
        $.ajax({
            url: "http://api.openweathermap.org/data/2.5/forecast?id=3117735&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
            datatype : "json",
            type: "GET",
    
            success: function(respuesta) {
              console.log(respuesta);
                        
            
    
              $("#clima3").html(`<img src="icons/${respuesta.list[18].weather[0].icon}.png"/>`);
              $('#weather3').html(respuesta.list[18].weather.description);
            },
            error: function(jqXHR, textStatus, errorThrown){
              console.log("ERROR :  " + errorThrown);
            }
    
            
          });
    
      });

        //dia 4 iconos
  $(document).ready(function(){
    $.ajax({
        url: "http://api.openweathermap.org/data/2.5/forecast?id=3117735&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
        datatype : "json",
        type: "GET",

        success: function(respuesta) {
          console.log(respuesta);
                    
        

          $("#clima4").html(`<img src="icons/${respuesta.list[26].weather[0].icon}.png"/>`);
         $('#weather4').html(respuesta.list[26].weather.description);
        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log("ERROR :  " + errorThrown);
        }

        
      });

  });

    //dia 5 iconos
    $(document).ready(function(){
        $.ajax({
            url: "http://api.openweathermap.org/data/2.5/forecast?id=3117735&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
            datatype : "json",
            type: "GET",
    
            success: function(respuesta) {
              console.log(respuesta);
                        
              $("#clima5").html(`<img src="icons/${respuesta.list[34].weather[0].icon}.png"/>`);
              $('#weather5').html(respuesta.list[34].weather.description);
    
           
            },
            error: function(jqXHR, textStatus, errorThrown){
              console.log("ERROR :  " + errorThrown);
            }
    
            
          });
    
      });

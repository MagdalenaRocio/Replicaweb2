//PRONÓSTICO ACTUAL
$(document).ready(cambio)
	
	city = $("#ciudad").val()
	console.log("prueba111"+city)

	$("#ciudad").change(function(){
		city = $("#ciudad").val()
		uerrele = "http://api.openweathermap.org/data/2.5/weather?id="+city+"&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce"
		cambio();
	})

	uerrele = "http://api.openweathermap.org/data/2.5/weather?id="+city+"&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce"

	function cambio(){


  $.ajax({
      url: uerrele,
      datatype : "json",
      type: "GET",

      success: function (respuesta) {
        console.log(respuesta);
        $("#climact").html(`<img src="icons/${respuesta.weather[0].icon}.png"/>`);
        $('#desact').html(respuesta.weather[0].description + "<br>");
        $("#tempact").html(Math.floor(respuesta.main.temp) + "ºC" + "<br>"); 
        $("#tempmin").html ("Temperatura Minima " +" " + Math.floor(respuesta.main.temp_min) + " " + "ºC" + "<br>");
        $("#tempmax").html("Temperatura Maxima " +" " + Math.round(respuesta.main.temp_max) + " " + "ºC" + "<br>");
        $("#speedwindy").html("Velocidad del Viento " +" " + respuesta.wind.speed + " " + "m/h" + "<br>");
        $("#cloud").html("Nubosidad " +" " + respuesta.clouds.all+ "%" + "<br>");
        
        lluvia=(respuesta.rain["1h"]);
        lluvia1h=(respuesta.rain["1h"]);
        console.log(lluvia1h);
        if (lluvia===undefined){ 
         $("#volrain").html("Volumen de Luvia 0,00 mm")
              }else{
                $("#volrain").html("Volumen de lluvia de las última hora" + " " + lluvia +"mm");
              }

               
        nieve=(respuesta.snow)
        console.log(lluvia);
        if (nieve==undefined){
         $("#volsnow").html("Volumen de Nieve 0,00 mm")
              }else{
                $("#volsnow").html("Volumen de Nieve de las ultimas 3 horas" + " " + nieve);
              }
             
                
      },
      error: function (jqXHR, textStatus, errorThrown){
        console.log("ERROR :  " + errorThrown);
      }

      
    });

};



//dia 1 iconos
$(document).ready(function(){
  $.ajax({
      url: "http://api.openweathermap.org/data/2.5/forecast?id=3117735&lang=sp&units=metric&APPID=65a9b2caaaba5d1b1762d5889a2637ce",
      datatype : "json",
      type: "GET",

      success: function (respuesta) {
        console.log(respuesta);
                          
       $("#clima1").html(`<img src="icons/${respuesta.list[5].weather[0].icon}.png"/>`);
       $('#weather1').html(respuesta.list[5].weather.description);

       
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
                  
       $("#clima2").html(`<img src="icons/${respuesta.list[12].weather[0].icon}.png"/>`);
       $('#weather2').html(respuesta.list[12].weather.description);
      
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
                      
          
  
            $("#clima3").html(`<img src="icons/${respuesta.list[20].weather[0].icon}.png"/>`);
            $('#weather3').html(respuesta.list[20].weather.description);
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
                  
      

        $("#clima4").html(`<img src="icons/${respuesta.list[28].weather[0].icon}.png"/>`);
       $('#weather4').html(respuesta.list[28].weather.description);
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
                      
            $("#clima5").html(`<img src="icons/${respuesta.list[36].weather[0].icon}.png"/>`);
            $('#weather5').html(respuesta.list[36].weather.description);
  
         
          },
          error: function(jqXHR, textStatus, errorThrown){
            console.log("ERROR :  " + errorThrown);
          }
  
          
        });
  
    });
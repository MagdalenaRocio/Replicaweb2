// Tutorial by http://youtube.com/CodeExplained
// api key : 82005d27a116c2880c8f0fcb866998a0


//SELECCIONAR ELEMENTOS

const iconElement= document.querySelector(".weather-icon");
const tempElement= document.querySelector(".temperature-value p");
const desElement= document.querySelector(".temperature-description p");
const locationElement= document.querySelector(".location p");
const notificationElement= document.querySelector(".notification");

//App Data

const weather={};

weather.temperature={
    unit :"celsius" 
}

//APP CONSTANTES Y VARIABLES
const KELVIN =273;
//API KEY
const key = "0f1307b8e0dac0bdd4a8533b930bc58d";

/*
// verificar si el buscar soporta geoloalizacion
if('geolocation' in navigator){
    navigator.geolocation.getCurrentPosition(setPosition,ShowError);
}else{
    notificationElement.getElementsByClassName.display= "block";
    notificationElement.innerHTML = "<p> El buscador no soporta Geolocalizacion</p>";
}
    //set USER'S POSITION
   /* function setPosition(position){
        let latitude =position.coords.latitude;
        let longitude= position.coords.longitude;

        getWeather(latitude,longitude);
    }

    //MOSTRAR ERROR CUANDO HAYA ERROR DE GEOLOCALIZACION
function ShowError(error){
    notificationElement.getElementsByClassName.display= "block";
    notificationEleme.innerHTML = `<p> ${error.message} </p> `;
}*/

// obtener el clima desde la API
function  getWeather(){
    let api = '{"coord":{"lon":-0.13,"lat":51.51},"weather":[{"id":501,"main":"Rain","description":"moderate rain","icon":"10n"}],"base":"stations","main":{"temp":281.73,"feels_like":273.85,"temp_min":279.26,"temp_max":285.15,"pressure":995,"humidity":81},"visibility":7000,"wind":{"speed":9.8,"deg":210,"gust":16.5},"rain":{"1h":3.05},"clouds":{"all":100},"dt":1578952821,"sys":{"type":1,"id":1414,"country":"GB","sunrise":1578902485,"sunset":1578932165},"timezone":0,"id":2643743,"name":"London","cod":200}';

    

    fetch(api)
    .then(function(response){
        let data= response.json();
        return data;
        
    })
    .then(function(data){

        weather.temperature.value = Math.floor(data.main.temp - KELVIN);
        weather.description = data.weather[0].description;
        weather.iconId = data.weather[0].icon;
        weather.city = data.name;
        weather.coutry= data.sys.country;
    })
    .then(function(){
        displayWeather();
    });
}

//DISPLAY CLIMA PARA  UI

function displayWeather(){
    iconElement.innerHTML=`<img src="icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML=`${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML= weather.description;
    locationElement.innerHTML=`${weather.city}, ${weather.country}`;
}



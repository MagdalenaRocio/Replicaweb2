function validarEmail(){
    var valorEmail=document.getElementById("email").value;
    console.log (valorEmail);
    var expresionRegular=/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3,4})+$/;  

        
    
  //  var email=convertirMinusculas(valorEmail.value);
   // email=comprobarAtEmail(email);
    if (expresionRegular.test(valorEmail)) {
        emailOk=true;
        document.getElementById('mensajecorreo').innerHTML = " ";
       // estilo2(valorEmail);
    }
    else {
        emailOk=false;
      //  estiloRojo(valorEmail);
      document.getElementById('mensajecorreo').innerHTML = "CORREO INVALIDO";
    }

}
function validarPassword () {
var expresionRegular = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
var p1 = document.getElementById("password").value;
var p2 = document.getElementById("confirm password").value;
  
  if (expresionRegular.test(p1)) {
    emailOk=true;
    document.getElementById('mensajepassword').innerHTML = " ";
   // estilo2(valorEmail);  
  }
  else {
    emailOk=false;
    document.getElementById('mensajepassword').innerHTML = "PASSWORD INVALIDO"; 
  }
  if (expresionRegular.test(p2)) {
    emailOk=true;
    document.getElementById('mensajepassword2').innerHTML = " ";
    
  }
  else {
    emailOk=false;
    document.getElementById('mensajepassword2').innerHTML = "confirmacion incorrecta"; 
  }
  if (p1.length == 0 || p2.length == 0) {
    alert("Los campos de la password no pueden quedar vacios");
    return false;
  }   
  if (p1 != p2) {
    alert("Las passwords deben de coincidir");
    return false;
  } else {
    alert("Todo esta correcto");
    return true; 
  }
}
/*document.getElementById('toggleProfile').addEventListener('click', function () {
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});*/
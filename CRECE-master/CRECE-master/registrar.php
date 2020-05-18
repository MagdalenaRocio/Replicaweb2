<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    
</head>
<body>

<form method="POST"action="insertar.php">
<input type="email" name="email" id="email"placeholder="insert your email"required onblur="validarEmail()">
<div id="mensajecorreo"></div>
<input type="password"name="password"id="password"placeholder="insert your password"required onblur="validarPassword()">
<div id="mensajepassword"></div>
<input type="password"name="confirm password"id="confirm password" placeholder="confirm password" required onblur="validarPassword()">
<div id="mensajepassword2"></div>
<input type="submit" name="enviar">

<?php include "conexion.php";
$consulta="select EMAIL from login";
$r= mysqli_query($link,$consulta);
while ($arr = mysqli_fetch_array($r)){ ?>
<option value="<?php echo $arr[0]?>">
</option>

<?php } ?>
</form>
<script src="validar.js"></script>

</body>
</html>

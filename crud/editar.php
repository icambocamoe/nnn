<?php
$nlinea = !empty($_GET['id']) ? $_GET['id'] : 0;
$linea='';
//Si hay una linea que modificar "$nlinea", entonces.
echo $nlinea. "\t";
if($nlinea){
    include('db_conn.php');
	$consulta = "SELECT * FROM escritura WHERE numero = $nlinea;";
	$resultado = mysqli_query($conn,$consulta);
	$linea = mysqli_fetch_assoc($resultado);
  $consulta2= "SELECT expediente from expediente where numero=$nlinea";
  $resultado2 = mysqli_query($conn,$consulta2);
  $linea2 = mysqli_fetch_assoc($resultado2);
  echo $linea2['expediente'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso de datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
    <div class="cabecera">Actualización de datos</div>
    <div class="contenido">
    <form class="contact" action="actualizar.php" method='post'>
            <input type="hidden" name="nlinea" value="<?php echo $nlinea;?>">
            <label for="i1">escritura</label>
            <input type="text" id="i1" name="c1" value="<?php echo $linea['numero'];?>">
            <br>
            <label for="i2">operacion</label>
            <input size="50" type="text" id="i2" name="c2" value="<?php echo $linea['operacion'];?>">
            <br>
            <label for="i3">firma</label>
            <input type="text" id="i3" name="c3" value="<?php echo $linea['firma'];?>">
            <br>
            <label for="i4">expediente</label>
            <input type="text" id="i4" name="c4" value="<?php echo $linea2['expediente'];?>">
            <br>
            <input class="boton" type="submit" value="actualizar">
    </form>
    </div>
    </div>
</body>
</html>

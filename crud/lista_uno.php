<?php
include('db_conn.php');
$numero = !empty($_POST['c1']) ? $_POST['c1'] : '';

$consulta = "select * from escritura where numero=$numero";
$resultado = mysqli_query($conn,$consulta);
$tabla =<<<FIN
<table>
<tr><th>numero</th><th>operacion</th><th>voulumen</th><th>fecha</th><th>firma</th><th>primer folio</th><th>ultimo folio</th><th colspan="2">Accion</th></tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['numero']}</td>";
    $tabla.="<td>{$registro['operacion']}</td>";
    $tabla.="<td>{$registro['volumen']}</td>";
    $tabla.="<td>{$registro['fecha']}</td>";
    $tabla.="<td>{$registro['firma']}</td>";
    $tabla.="<td>{$registro['primer_folio']}</td>";
    $tabla.="<td>{$registro['ultimo_folio']}</td>";
    $tabla.="<td><a href=borrar.php?id={$registro['numero']}>Borrar</a></td>";
    $tabla.="<td><a href=editar.php?id={$registro['numero']}>Editar</a></td>";
    $tabla.='</tr>';
}
$tabla.='</table>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>lista</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Lista de escrituras</div>
        <div class="contenido">
          <form class="contact" action="lista_uno.php" method='post'>
            <label for="i1">Buscar escritura</label>
            <input type="text" id="i1" name="c1" >
            <br>
            <input class="boton" type="submit" value="buscar">
          </form>
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
          <a href="registrar.php">Registrar</a>
          &nbsp;&nbsp;&nbsp;&nbsp
          <a href="lista.php"> back</a>
        </p>

        </div>
    </div>
</body>
</html>

<?php
include('db_conn.php');

ob_start();
$permiso="Select permiso from users;";
$ans=mysqlI_query($conn,$permiso);
$row = $ans->fetch_assoc();
$return= $row['permiso'];
$sioque=substr($return,0,1);

if($sioque==0){
//echo "$sioque";

echo'<script type="text/javascript">
alert("deny access");
window.location.href="notar.php";

window.location.replace("javascript:history.back()");
</script>';

}

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 100;
$consulta = "SELECT * FROM escritura ORDER BY numero ASC LIMIT $start_from, 100";
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
        <a href="../home.php"> back</a>
        </p>
        <?php
              $sql = "SELECT COUNT(numero) AS total FROM escritura";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_pages = ceil($row["total"] /100); // calculate total pages with results

              for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                          echo "<a style='background-color: NAVY; color: WHITE; padding: 5px 10px;'  href='lista.php?page=".$i."'";
                          if ($i==15)  echo " class='curPage'";
                          echo ">".$i."</a> &nbsp;&nbsp;&nbsp;&nbsp;";
              };
        ?>
        </div>
        </div>

        </div>
    </div>
</body>
</html>

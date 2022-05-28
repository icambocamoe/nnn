<?php
$numero = !empty($_POST['c1']) ? $_POST['c1'] : '';
$expediente = !empty($_POST['c2']) ? $_POST['c2'] : '';
$abogado = !empty($_POST['c3']) ? $_POST['c3'] : '';
$operacion = !empty($_POST['c4']) ? $_POST['c4'] : '';

if($expediente&&$abogado&&$operacion){
    include('db_conn.php');
    $consulta=<<<FIN
    insert into escritura
    (numero,expediente,abogado,operacion)
    values
    ('$numero','$expediente','$abogado','$operacion')
FIN;
    if(!mysqli_query($conn,$consulta)){
        die('No se pudo agregar el registro');
    }
}
header('Location: lista.php');

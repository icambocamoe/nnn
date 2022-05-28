<?php
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
if($id){
    include('db_conn.php');
    $consulta = "delete from escritura where numero=$id";
    if(!mysqli_query($conn,$consulta)){
        die('No se pudo eliminar el registro');
    }
}
header('Location: lista.php');

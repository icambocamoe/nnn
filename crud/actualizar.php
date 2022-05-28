<?php
include('db_conn.php');
$numero = !empty($_POST['c1']) ? $_POST['c1'] : '';
$operacion = !empty($_POST['c2']) ? $_POST['c2'] : '';
$firma = !empty($_POST['c3']) ? $_POST['c3'] : '';
$expediente = !empty($_POST['c4']) ? $_POST['c4'] : '';
$nlinea =  !empty($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($expediente){
	mysqli_query($conn,"START TRANSACTION");
	$registro = "UPDATE escritura set numero='$numero',operacion='$operacion',firma='$firma'	WHERE numero='$nlinea'";
	$registro2 = "UPDATE expediente set expediente='$expediente' WHERE numero='$nlinea'";
	$resultado = mysqli_query($conn,$registro);
	$resultado2 = mysqli_query($conn,$registro2);
	if ($resultado and $resultado2) {
    mysqli_query($conn,"COMMIT");
} else {
    mysqli_query($conn,"ROLLBACK");
}
}
header('Location: lista.php');

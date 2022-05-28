<?php

	include "db_conn.php";

    $abo = $_POST['abogadou'];
    $ope = $_POST['oper'];
    $name = $_POST['nome'];
	$last = $_POST['api'];
	$type = $_POST['type'];


	 $sql1 = "Select expediente from $abo ORDER BY expediente DESC LIMIT 1 ;";
        $res=mysqli_query($conn,$sql1);
         $row = $res->fetch_assoc();
          $return= $row['expediente'];
					$exp=substr($return,0,5);


          if ($return==NULL)
          $return = 1;
          else{
						$sioque=substr($return,5,1);
						$sioque = $sioque +1;
						echo $sioque;
					}
					$e=$exp.$sioque;
					$nombre_comp=$name.' '.$last;
					$fecha=date("d-m-Y");
	$sql = "INSERT INTO $abo (escritura,expediente,apertura,operacion,tipo_otorgante,nombre_otorgante) VALUES ('$e','$e','$fecha','$ope','$type','$nombre_comp');";
	$sql2 ="INSERT INTO operacion (expediente,abogado,operacion) VALUES ('$e','$abo','$ope');";
	$sql3 ="INSERT INTO otorgante (abogado,expediente,nombre,apellido,tipo) VALUES ('$abo','$e','$name','$last','$type');";

	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)){

	    echo'<script type="text/javascript">
    alert("expediente Guardado");
    window.location.href="home.php";
    </script>';
    header("Location: ../home.php?");

	}
	else
	echo "no charcha, $sql3";

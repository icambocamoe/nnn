<?php

	include "db_conn.php";

    $user = $_POST['user'];
    $code = $_POST['code'];


	$sql ="UPDATE users SET permiso = '$code' WHERE user_name = '$user';";
	$r=mysqli_query($conn, $sql);
	if ($r){

    if(mysqli_affected_rows($conn)){

    echo'<script type="text/javascript">
    alert("usuario actualizado");

    window.location.href="javascript:history.back()";
    </script>';}

   else{
			echo "Affected rows: " . mysqli_affected_rows($conn);
			echo'<script type="text/javascript">
		    alert("no such user or same input");

		    window.location.href="javascript:history.back()";
		    </script>';
		   }

	}
	else
	echo "no charcha, $sql";

 <?php
            include "db_conn.php";
            ob_start();
        $permiso="Select permiso from users;";
        $ans=mysqlI_query($conn,$permiso);
        $row = $ans->fetch_assoc();
        $return= $row['permiso'];
        $sioque=substr($return,1,1);

        if($sioque==0){
            //echo "$sioque";

	    echo'<script type="text/javascript">
    alert("deny access");
    window.location.href="consulta.php";

    window.location.replace("localhost/home.php");
    </script>';

        }


        //echo $return;
?>

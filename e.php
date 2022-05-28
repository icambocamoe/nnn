 <?php
        include "db_conn.php";
	$abo = $_POST['value'];
	/*echo $abo;*/


            $sql = "Select expediente from $abo ORDER BY expediente DESC LIMIT 1 ;";
        $res=mysqlI_query($conn,$sql);
         $row = $res->fetch_assoc();
          $return= $row['expediente'];
          $sioque=substr($return,5,3);
          if ($return==NULL)
          $return = 1;
          else
          $sioque = $sioque +1;

          echo $sioque;
          /*echo $sql;*/
 ?>

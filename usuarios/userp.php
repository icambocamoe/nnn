 <?php
            include "db_conn.php";
            ob_start();
        $permiso="Select permiso from users;";
        $ans=mysqlI_query($conn,$permiso);
        $row = $ans->fetch_assoc();
        $return= $row['permiso'];
        $sioque=substr($return,2,1);

        if($sioque==0){
            //echo "$sioque";

	    echo'<script type="text/javascript">
    alert("deny access");
    window.location.href="userp.php";

    window.location.replace("javascript:history.back()");
    </script>';

        }


        //echo $return;
?>

 <!DOCTYPE html>
<html>
<head>
<title>permisos usuarios</title>
<style>
	    body{
	        background-image: url('renaissance-1.jpg');
	    }
	    h1{
	        -webkit-text-stroke: .5px white; /* width and color */
	        font-family: arial; color: black;
	        font-size: xx-large
	    }
	     label{
	        -webkit-text-stroke: .5px white; /* width and color */
	        font-family: arial; color: black;
	        font-size: xx-large
	    }
	    a {
  background-color: red;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: #555;
}

a:active {
  background-color: black;
}

/*a:visited {
  background-color: #ccc;
}*/
	</style>
</head>
<body>

<h1>Administracion de permisos de usuarios</h1>
<form action="permiso.php" method="post">
  <label for="user">Usuario:</label><br>
  <input type="text" id="user" name="user"><br><br>
  <label for="code">codigo de acceso:</label><br>
  <input type="text" id="code" name="code"><br><br>
  <input type="submit" value="Submit">
</form>
<p><br></p>
     <a href="admin.user.php">back</a>
</body>
</html>

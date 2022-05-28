 <?php
            include "db_conn.php";
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


        //echo $return;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>

		<script>
		    $(document).ready(function(){
		       //$("p").html(val);
		        $("select").change(function(){
		            var val= $("#abogado").val();
		            $("#exp").load("e.php",{
		                value:val

		            });
		        });

		    });
		</script>
<script src="addf.js"></script>
<style>
body {
  background-image: url('gyptisches_Museum_Kairo_2016-03-29_Tutanchamun_Grabschatz_09.jpg');
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
input {
  /*display: block;*/
  margin: 5px;
}
select {
/*  display: block;*/
  margin: 5px;
}
button{
    margin: 5px;

}
a{
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
label{

    display: block;
    font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>
         <form id="myForm" action="exp.php" method="POST">

                <label name="exp" for="exp">Expediente: </label>
                <div id=exp>
                   <!--  <?php
                    $sql = "Select expediente from abo1 ORDER BY expediente DESC LIMIT 1 ;";
                    $res=mysqli_query($conn,$sql);
                     $row = $res->fetch_assoc();
                      $return= $row['expediente'];
                      $sioque=substr($return,5,1);
                      $sioque = $sioque +1;
                      echo $sioque;

                    ?>-->
                 </div>


                <label for="abogadou">Abogado:</label>
         <select name="abogadou" id="abogado">
             <option value="ain sof">Selecciona</option>
              <option value="abo1">jorge luis ramos</option>
              <option value="abo6">nassia</option>
              <option value="abo9">jesica castaneda</option>
              <option value="aboh">marisela</option>
            </select>

            <div id=ope>
                    <!--botones para operacion -->
                <button type="button" id="btn">+</button>
                <button type="button" id="btnm">—</button>


                  <label for="operacion">Operacion:</label>
                  <input type="text" id="op" name="oper" >
             </div>

            <!--botones para otorgante -->
            <div id=oto>

                <button type="button" id="tbtn">+</button>
                <button type="button" id="tbtnm">—</button>
              <label for="nombre" id="ln">nombre: </label>
              <input type="text" id="in" name="nome" >
              <label for="apell" id="la">apellidos: </label>
              <input type="text" id="ia" name="api" >
              <br>
             <!--
                 <button type="button" id="kbtn">+</button>
              <button type="button" id="kbtnm">—</button>
             -->
              <label for="tipo" id="lt">tipo: </label>
              <input type="text" id="it" name="type" >

          </div>
          <button type="submit" name="submit">Submit</button>
        </form>


<p><br></p>
     <a href="home.php">back</a>





</body>
</html>

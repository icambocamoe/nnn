<?php
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = 'root';
     $db = "empresa";
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
	echo "Connection failed!";
}

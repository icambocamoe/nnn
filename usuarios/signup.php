<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <style>
body {
  background-image: url('reinassence.jpg');
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
a {
    color: #39ff14;
    font-family: Arial, Helvetica, sans-serif;
}
</style> 
<form action="signup.inc.php" method="POST">
	<input type="text" name="name" placeholder="name">
	<br>
	<input type="text" name="uid" placeholder="user">
	<br>
	<input type="password" name="pwd" placeholder="password">
	<br>
	<button type="submit" name="submit">Sign up</button>
	</form>
	

</body>
</html>
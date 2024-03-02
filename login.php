<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>
form {
	border: 2px solid #ccc;
	padding: 10px;
	background : SkyBlue;
	border-radius: 15px;
   margin: auto;
   width: 50%;
   text-align: center;
}
h1{
   width: 50%;
   margin: auto;
   padding: 10px;
   text-align: center;
   font-size: 50px;
   color: white;
}
h2{
   text-align: center;
   color: white;
}
.btn{
border-radius: 12px;
transition-duration: 0.4s;
background color: #ff00bb;
border: none;
color: black;
padding: 16px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
</style>
</head>
<body>
<?php
include "options.php";
?>
<?php
    if(isset($_COOKIE["login_error"])){
		 setcookie("login_error","Username and
	   passwor doesnt match", time()- 600 );
		echo "<p style='color:red'>".$_COOKIE["login_error"]."</p>";
	}
?>
<br>
<form method="get" action="checklogin.php">
<h1>Login</h1>
<br>
<br>
   <h2>Mail :</h2>
   <input name="mail" name="mail" placeholder="mail"> <br>
   <h2>Password :</h2>
   <input type="password" name="password"  placeholder="password"><br>
   <br>
   <br><br>
   <button class="btn" type="submit">Login</button>

</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
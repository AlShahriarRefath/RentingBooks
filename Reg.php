<html>
<head>
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
<div class="data">
<br>
<form method="post" action="adduser.php">
<h1>Registration</h1>
<h2>Username :</h2> <input name="username" placeholder="username">
<h2>Mail :</h2> <input name="mail"  placeholder="mail">
<h2>Password :</h2> <input type="password" name="pass"  placeholder="password">
<div class="press">
<br><br>
<button class="btn" type="submit">Login</button>
</div>
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
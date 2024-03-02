<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <style>
ul {
  /* position: absolute; */
  display: inline;
  right: 0;
  list-style-type: none;
  margin: 0;
  margin-left: 80%;
  padding: 20px;
  padding-right: -20%;
  /* overflow: hidden; */
  background-color: SkyBlue;
  text-align: center;
  width: 90%;
  border: 3px solid skyblue;
  border-radius: 30px;
}

li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 26px;
  margin-right: 20px;
  text-decoration: none;
  right: 20;
}
li a:hover {
  background-color: teal;
  border-radius: 30px;
}
</style>
</head>
<body>
<section class="upperpart">
<div class="logo">
<img src="images/OurBooks.jpg" alt="" srcset="">
</div>
<div class="nav">
<ul>
<li class="item"><a href="home.php"> Home</a></li>
<?php
     if(isset($_COOKIE["is_login"])){
		  echo '<li class="item"><a href="logout.php"> Logout</a></li>';
	 }
	 else{
		 echo '<li class="item"><a href="login.php"> Login</a></li>
		 <li class="item"><a href="Reg.php"> Registration</a></li>';		 
	 }
?>
</ul>
</div>
</section>
</body>
</html>
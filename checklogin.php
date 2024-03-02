<?php
   $mail = $_GET["mail"];
   $password = $_GET["password"];
   $db =  mysqli_connect("127.0.0.1", "root" , "", "login");
   $x = "SELECT * FROM usersinfo WHERE mail='$mail' and password='$password'";
   $result = $db->query($x);
   

   if( $result->num_rows > 0){
	  if(isset($_GET["remember"])){
       setcookie("is_login",true, time()+ 600);
	  }
      else{
       setcookie("is_login",true, time()+ 20);
	  }		  
	  setcookie("usersinfo", $mail, time()+600);  
	  header("Location:home.php");
   }
   else{
	   setcookie("login_error","Username and
	   password doesnt match", time()+ 600 );
	   header("Location:login.php");   
   }


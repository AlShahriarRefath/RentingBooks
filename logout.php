<?php
setcookie("is_login",true, time()- 300 );
 header("Location:login.php")
?>
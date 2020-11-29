<?php
session_start(); 
?>
<?php

if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
else{
    
   $user=$_SESSION['login_user'];
    if ($user=="JON"){
          echo '<script type="text/javascript"> window.open("../profile_a.php","_self");</script>' ;
    }
    else {
         echo '<script type="text/javascript"> window.open("../profile_a.php","_self");</script>' ;
    }
}
   



?>
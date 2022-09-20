<?php

session_start();
$newta = $_SESSION['username']; 
 if(isset($newta)){
    
                     //something here
            	//delete and destroy session
                session_destroy();
                unset($_SESSION['username']);
                 unset($newta);
                //unset($_SESSION['expiry']);
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Logged you out')';
    </script>");
    header("Location:https://anonymous.astralecorp.com");
	 }else{ 
                    echo '<span style="color:red;text-align:center;">Logout Failed.. Try again.</span>';
                     }
     
?>
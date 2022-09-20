<?php
   	session_start();
       //check if user really exists incase of session hijacking . Validate session always and destroy when need be
       $now = time();
       if (!isset($_SESSION['username'])) {
           header('location:/');
           exit();
           
       }else{
           $newta = $_SESSION['username']; 
       }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Anonymous Ecorp</title>
    <!--import jquery and styling wiht all header meta tags here-->
</head>
<body>
<div id="form3a">
  <div class="container">
    <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg">
    <h1 style="color:hwitesmoke;">Anonymous Share</h1>
    <h2><?php echo $newta?>'s Profile</h2>
    <p>&#10084;&#65039;Share Your Profile to get anonymous messages from friends and secret lovers.</p>
    <p>&#127873; Come back and view the mystery messages!!</p>
    <a href=""><button id="b10" style="font-size:24px" onclick=location.reload()>Refresh Messages <i class="fa fa-download" style="color:red;"></i></i></button><br></a>
    <p>
        <?php
           $conn=mysqli_connect("localhost","username","password","database") ;
           if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            }else{
           //if connects to database,fetch messages here
              
            ?>
            
            <div id="response2" >
            <p style="text-align: center; color: whitesmoke;;font-size:13px;"><?php  echo $sms ?></p>
            <p style="text-align: center; color: rgb(0, 255, 42);font-size:13px;"><?php echo $time ?></p>
            <div style="width:40px; border-bottom: 1px solid red; text-align:center; margin-left:auto;margin-right:auto;display:block;" ></div>
            </div>
           
            <?php
            }}else{
                ?>
                <p>&#128148;OOPS..You have no messages so far. Share Your Profile to get anonymous messages from friends and secret lovers.</p>
            <?php
            }
         } ?>
        

        
    </p>
    <a href="myaccount"><button id="b20" style="font-size:24px" ><i class="fa fa-angle-double-left" style="color:red"></i>Go back</button></a>
    <p style="background:linear-gradient(to top right, #33ccff 0%, #9900cc 30%);">&#10084;&#65039;Thank you for using Anonymous Share. Having trouble or wish to contribute to make this platform better??<a style="color:pink;"href="https://anonymous.astralecorp.com/#socials">Contact Us</a></p>
</div>
</div>
</body>

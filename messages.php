<?php
   	session_start();
       
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
    <meta name="desciption" content="Anonymous Ecorp. Share Anonymously across the world. Fast, Simple, Secure and uses latest technology  ensuring you leave no digital footprints. Just like you were never here!!">
    <link rel="icon" type="image/x-icon" href="alogo.png">
    <meta name="description" content="Anonymous Share">
    <meta property="og:image"  content="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:description" content="Share secret messages with friends,lovers or associates globally">
    <meta property="og:url"content="https://anonymous.astralecorp.com" >
    <meta property="og:title" content="Anonymous Share">
    <meta name="twitter:site" content="@astralecorp" >
    <meta name="twitter:description" content="Anonymous Share" >
    <meta name="twitter:title" content="Anonymous Ecorp" >
    <meta name="twitter:creator" content="@astralecorp" >
    <meta name="twitter:url" content="https://anonymous.astralecorp.com" >
    <meta name="twitter:image" content="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg" >
    <meta name="theme-color" content="#9900cc" >
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://res.cloudinary.com/dyadjj49h/raw/upload/v1661183700/accsAnonymous22Aug_uf3uth.css">
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
           $conn=mysqli_connect("localhost","astralec_eclipse","MsFCZr*UoP-I","astralec_anonecorp") ;
           if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            }else{
            $query1= mysqli_query($conn,"SELECT*from $newta");
            $query2 =  mysqli_query($conn, "SELECT anonmsg FROM $newta WHERE anonmsg IS NULL or anonmsg = ''");
            if ($query2 == TRUE){
            while($row=mysqli_fetch_array($query1)){
            $sms =  $row['anonmsg'];
            $time = $row['anontime'];
           
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
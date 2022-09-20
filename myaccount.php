<?php
   	session_start();
       
       $now = time();
       if (!isset($_SESSION['username'])) {
           header('location:login.php');
           exit();
           
       }else{
           $newta = $_SESSION['username']; 
            //PICKING IP ADDRESS OF LOGIN:
	// if user from the share internet
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
	     $lipaddr = $_SERVER['HTTP_CLIENT_IP'];
	    //echo 'IP address = '.$_SERVER['HTTP_CLIENT_IP'];
		//echo "IP Address of client " . getenv("REMOTE_ADDR");
	}
	//if user is from the proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		//echo 'IP address of proxy = '.$_SERVER['HTTP_X_FORWARDED_FOR'];
		$lipaddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	//if user is from the remote address
	else{
	    //echo 'IP address remote = '.$_SERVER['REMOTE_ADDR'];
		$lipaddr = $_SERVER['REMOTE_ADDR'];
	}
	//echo  $lipaddr;
    $device = $_SERVER['HTTP_USER_AGENT'];

	$conn=mysqli_connect("localhost","astralec_eclipse","MsFCZr*UoP-I","astralec_anonecorp") ;
	 $sql = "UPDATE `anonusers` SET `ipaddr`= '$lipaddr',`deviceid`='$device' WHERE `anonname` = '$newta' ";
       if(mysqli_query($conn, $sql)){
          // echo"success";
       } 
    
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
    <meta name="twitter:image" content="https://res.cloudinary.com/dyadjj49h/image/upload/v1661000623/g2_v1fu4s.pngg" >
    <meta name="theme-color" content="#9900cc" >
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dyadjj49h/raw/upload/v1661183700/accsAnonymous22Aug_uf3uth.css">
</head>
<body>
<div id="rowzy">
  <a id="lgiz" style="text-decoration:none;" href="https://anonymous.astralecorp.com" >ANONYMOUS</a>
  <i class="fa fa-bars" id="mbaz" onclick="myFunction()"></i>
  <div class="dropdownzi">
        <i id="fa-barszi" class="centerzi" onclick="myFunction()">
            <div></div>
        </i>
        <div id="myDropdownzi" class="dropdownzi-content">
          <a href="https://anonymous.astralecorp.com">Home</a>
          <a href="" class="share-p-link">Share</a>
          <a href="logout.php">Logout</a>
          <a href="privacypolicy">Policy</a>
        </div>
      </div>
         
</div>
<script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdownzi").classList.toggle("show");
      }
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('#mbaz')) {
          var dropdowns = document.getElementsByClassName("dropdownzi-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>  
<div id="form3">
  <div class="container">
    <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg">
    <h1 style="color:hwitesmoke;">Anonymous Share</h1>
    <h2><?php echo $newta?>'s Profile</h2>
    <p>&#10084;&#65039;Share Your Profile to get anonymous messages from friends and secret lovers.</p>
    <p>&#127873; Come back and view the mystery messages!!</p>
    <a href="messages.php"><button id="b11" style="font-size:24px">View Messages <i class="fa fa-eye" style="color:red"></i></button><br></a>
        <a href="https://api.whatsapp.com/send?text=Write%20me%20%20a%20*secret%20anonymous%20message*..%0A%20%F0%9F%98%89%20*I%20won't%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%0A%F0%9F%98%9AI'm%20_<?php echo$newta?>_.Lets%20have%20fun%0A%20https%3A%2F%2Fanonymous.astralecorp.com%2F<?php echo$newta?>" style="text-decoration:none;"><button id="b220" class="share-p-link" style="font-size:16px;background-color:#28D146;">Share My Profile<i class="fa fa-whatsapp" style="color:red"></i></button></a>
    <a href="https://www.facebook.com/sharer/?u=https://anonymous.astralecorp.com/<?php echo$newta?>"target="_blank" style="text-decoration:none;"><button id="b220" class="share-p-link" style="font-size:16px;background-color:#229ED9;">Share My Profile<i class="fa fa-facebook" style="color:red;background-color:none;"></i></button></a>
    
   
  </div>
</div>

<div id="socials" style="margin-top:40px;">
  <div class="rowvi">  
      <div class="columnvi" >
        <h1>Anonymous Ecorp</h1>
          <div style="margin-top: 30px;" >
            <a href="https://developers.astralecorp.com"><p id="af" >Developers</p></a>
            <a href="#"><p id="af" >Features</p></a>
            <a href="#"><p id="af" >Partners</p></a>
            <a href="#socials"><p id="af" >Join Us</p></a>
      </div>
      </div>
      <div class="columnvi" style="text-align: center;">  
        <h1>Visit Us</h1> 
          <div style="margin-top: 32px; text-align: center;">
            <p>Clevelend,Oklahoma</p>
            <p>Tuls</p>
            <p>White Street</p>
            <p>Anonymous Ecorp</p>
          </div>
          
        </div>
    </div> 
  </div>
</div>
<footer>
  <p>Copyright 2022</p>
  <p>All rights reserved.Anonymous Ecorp</p>
</footer>
</body>
</html>
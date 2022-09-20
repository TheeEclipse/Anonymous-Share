<?php
//this script handles login activity and denies acess to login page if user is logged in aready in samr browser. Uses sessions
session_start();
       
       if (isset($_SESSION['username'])) {
           header('location:myaccount');
           exit();
       }
           ?>
           
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Anonymous Ecorp</title>
    <!---headrer meta tags and styles --->
</head>
<body>
<form method="post" action="" id="form2">
  <div class="container">
    <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v3/halloween02_jgqtjs.svg">
    <h1 style="color:hwitesmoke;">Anonymous Share</h1>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="psw"  required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw"   required >
    <div id="response2" style="text-align: center; color: rgb(0, 255, 42);">
    <?php
//add a php script to handle the login form in real time
           
if (!empty($_POST['username']) && !empty($_POST['password'])){
  //if condition met, do the code below.redirect to home / account page after login
?>
    </div>
    <button  type="submit" value="Submit" class="registerbtn"  method="post" id="submit2">Login</button>
</div>
  <div class="container signin">
    <p>Don't have an account? <a href="register">Sign up</a>.</p>
  </div>
</form>
</body>
</html>

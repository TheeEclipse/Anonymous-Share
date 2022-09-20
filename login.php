<?php

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
    <link rel="stylesheet" href="https://res.cloudinary.com/dyadjj49h/raw/upload/v1661183645/stylesapi_ocy1jrAnonymous22Aug_rmwhva.css">
</head>
<body>
<form method="post" action="" id="form2">
  <div class="container">
    <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg">
    <h1 style="color:hwitesmoke;">Anonymous Share</h1>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="psw"  required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw"   required >
    <div id="response2" style="text-align: center; color: rgb(0, 255, 42);">
    <?php

if (!empty($_POST['username']) && !empty($_POST['password'])){

//db connect
    $conn=mysqli_connect("localhost","astralec_eclipse","MsFCZr*UoP-I","astralec_anonecorp") ;
    $usernameS=$_POST['username'];
    $passwordS=$_POST['password'];
$username = mysqli_real_escape_string($conn , $usernameS);
$password = mysqli_real_escape_string($conn , $passwordS);


//pass encryption  below using crypt algorithm
$key = '89 9e 06 f5 58 c1 6d 1b b9 02 f7 4e c4 12 f8 8a 
 db 64 ed e0 6f d9 e6 db db e0 c0 ef bd a9 83 13 
 6f dd 38 0f f6 d7 4c 2e b4 97 4c e2 68 12 af 2c 
 b7 19 6d a7 cb f9 27 09 e4 16 a6 e4 a3 0d 16 53 
 6d 39 ea ab d9 cf a4 62 9e 88 23 72 4b bc 7c 77 
 59 cd 8c 4a 6e aa 01 4e b3 d2 33 50 b7 02 4e c6 
 24 b6 4b 59';
 $encpassword = crypt($password,$key);

//program continues
$encpassword = crypt($password,$key);
       
   $query = mysqli_query($conn, "SELECT * from anonusers where anonname= '$username' and anonpass= '$encpassword'");
   if (mysqli_num_rows($query)<1){
      echo"Username / Password error";
   
   //	include('login failed.php');
      // $_SESSION['msg']="Login Failed, User not found!";
   }
   else{
      // echo"success";
       session_start();
       $_SESSION['username'] = $username;
       header("Location:myaccount");
}
}
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
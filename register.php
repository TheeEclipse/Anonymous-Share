
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Anonymous Ecorp</title>
    <meta name="desciption" content="Anonymous Ecorp. Share Anonymously across the world. Fast, Simple, Secure and uses latest technology  ensuring you leave no digital footprints. Just like you were never here!!">
    <link rel="icon" type="image/x-icon" href="alogo.png">
    <meta name="description" content="Anonymous Share">
    <meta property="og:image"  content="https://res.cloudinary.com/dyadjj49h/image/upload/v1661000623/g2_v1fu4s.png">
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
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://res.cloudinary.com/dyadjj49h/raw/upload/v1661183645/stylesapi_ocy1jrAnonymous22Aug_rmwhva.css">
</head>
<body>
<form method="post" action="Sign up.php" id="form2">
  <div class="container">
    <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg">
    <h1 style="color:hwitesmoke;">Anonymous Share</h1>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="psw"  required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw"   required >
    <div id="response2" style="text-align: center; color: rgb(0, 255, 42);"></div>

    <button  type="submit" value="Submit" class="registerbtn"  method="post" id="submit2">Register</button>
    <script>
    $("#submit2").click( function() {
    
    $.post( $("#form2").attr("action"),
            $("#form2 :input").serializeArray(),
        function(info) {
    
          $("#response2").empty();
          $("#response2").html(info);
     
        });
    
    $("#form2").submit( function() {
      return false;  
    });
    });
    
    </script>
</div>
  <div class="container signin">
    <p>Already have an account? <a href="login">Sign in</a>.</p>
    <p>By having an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </div>
</form>

</body>
</html>
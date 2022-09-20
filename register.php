
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Anonymous Ecorp</title>
 <!--import jquery and necessary meta tags ,styles and bootstrap-->
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

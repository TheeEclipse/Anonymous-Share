<?php
//handle the link format here and use get parameters
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Anonymous Ecorp</title>

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
          <a href="login" class="share-p-link">Login</a>
          <a href="register">Sign up</a>
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
    <?php
     if($_GET['user'])
     {
   //do something here with the get from url
     ?>
    <h1 style="color:whitesmoke;">Say Something</h1>
    <h2>To <?php echo"$vname"?>.</h2>
    <p>&#10084;&#65039;Send me an anonymous message. I won't know who sent it</p>
    <form method="post" action="" id="form2">
        <label for="smsgl"><b>&#127873;Type an anonymous message:</b></label>
       <textarea type="text" max-rows="10" rows="3" maxlength="255" placeholder="Type a message for <?php echo"$vname"?> here" name="smsg" id="psw"  required></textarea>
       <input type="hidden" value="<?php echo"$vname"?>" name="user">
       <div id="response2" style="text-align: center; color: rgb(0, 255, 42);">
                <!--amtd-->
                <?php
                    if (!empty($_POST['smsg']) && isset($_POST['user'])){
                                   //on button click,insert message to recivers table in database
                                ?>
       </div>
       <a href=""><button id="b11" type="submit" value="Submit"  style="font-size:24px">Send Message<i class="fa fa-send" style="color:red"></i></button><br></a>
    
    </form>
    <?php
    }else{ ?>
      <h1 style="color:whitesmoke;">Anonymous Share</h1>
        <div id="response2" style="text-align: center; color: rgb(0, 255, 42);">
         <?php echo "Invalid Link. The receiver doesn't exist" ?>
        </div>
        <?php

    }
  }else{ ?>
  <h1 style="color:whitesmoke;">Anonymous Share</h1>
    <div id="response2" style="text-align: center; color: rgb(0, 255, 42);">
     <?php echo "You accesed a Fake Link or edited the link wrongly" ?>
    </div>
    <?php
  }
  ?>
    <a href="/" style="text-decoration: none;"><button id="b22" class="share-p-link" style="font-size:16px">Create my link <i class="fa fa-paperclip" style="color:red"></i></button></a>
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

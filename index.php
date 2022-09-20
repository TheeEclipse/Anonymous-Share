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
    <link rel="stylesheet" href="https://res.cloudinary.com/dyadjj49h/raw/upload/v1661009493/style_xdo0ms.css">
</head>
<body>
<div id="rowzy">
  <a style="text-decoration:none;" id="lgiz" href="https://anonymous.astralecorp.com" >ANONYMOUS</a>
  <i class="fa fa-bars" id="mbaz" onclick="myFunction()"></i>
  <div class="dropdownzi">
        <i id="fa-barszi" class="centerzi" onclick="myFunction()">
            <div></div>
        </i>
        <div id="myDropdownzi" class="dropdownzi-content">
          <a href="https://anonymous.astralecorp.com">Home</a>
          <a href=""  class="share-button">Share</a>
          <script>
            const shareButton = document.querySelector('.share-button');
shareButton.addEventListener('click', event => {
  if (navigator.share) { 
   navigator.share({
      title: 'Anonymous Secret Messages',
      url: 'https://anonymous.astralecorp.com'
    }).then(() => {
      console.log('Thanks for sharing!');
    })
    .catch(console.error);
    } else {
        shareDialog.classList.add('is-open');
    }
});

closeButton.addEventListener('click', event => {
  shareDialog.classList.remove('is-open');
});
          </script>
          <a href="login">Login</a>
          <a href="/register">Signup</a>
          <a href="privacypolicy">Policy</a>
        </div>
      </div>
          <div class="rowzi">
                <div class="columnzi" id="lf">
                  <h2 style="text-align: center;" id="lh">Share Anonymously across the world</h2>
                  <p id="lp">Fast,efficient,secure,leave no traces..just like you were never here!!</p>
                  <a href="register" style="text-decoration:none;"><button type="button" class="btn btn-danger" id="btnzi">Get Started</button></a>
                </div>
                <div class="columnzi" id="lf">
                  <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661071203/halloween02_jgqtjs.svg" alt="" width="70%" height="70%">
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
<!--new div-->
<div id="s2nd">
   <h3 id="ttl">Anonymous Ecorp</h3>
   <p>Why Choose Anonymous Ecorp??</p>
   <p>We provide secure,anonymous sharing with your peers / associates. No digital footprints left,no logs,no data recorded.</p>
   <div class="rowzi1">
        <div class="columnzi1">
          <h2 style="text-align:center;">Secure</h2><br>
           <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661000622/sec_kzzdsl.svg" alt="" width="150px" height="150px">  
        </div>
        <div class="columnzi1"> 
        <h2 style="text-align: center;">Global</h2>
        <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661000825/global-svgrepo-com_lfjaax.svg" alt="" width="150px" height="150px">
        </div>
        <div class="columnzi1"> 
        <h2 style="text-align: center;">New Tech</h2>
        <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1659276311/about-img_dsd7om.svg" alt="" width="150px" height="150px">
        </div>
        <div class="columnzi1"> 
        <h2 style="text-align: center;">Efficient</h2>
        <img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1661000907/efficiency-svgrepo-com_juvxgo.svg" alt="" width="150px" height="150px">
        </div>
   </div>
</div>
<div id="socials" style="margin-top:40px;">
  <div class="rowvi">
    <h2 class="titl">Contacts</h2>
        <div class="columnvi" style="margin-top: 20px;">   
            <a href="https://twitter.com/astralecorp" class="fa fa-twitter"></a>     
            <a href="mailo:eclipse@astralecorp.com" class="fa fa-google"></a>
            <a href="https://instagram.com/astralecorp" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-snapchat-ghost"></a>
            <a href="https://t.me/AstralEcorp" class="fa fa-telegram"></a>
            <div style="margin-top: 30px;">
              <p>Use our Social tags above</p>
              <p>24/7 Service and Support</p>
              <p>Response is as fast as we can..</p>
              </p>but rest assured on time</p>
            </div>
        </div>    
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
<!doctype html>
<html lang="en"><head>
     <title>CONTACT</title>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/portal.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1>CONTACT</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact (Martin Freiwald)</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
    </nav>
     </header>
       
    <h2 class="subheader">About Me</h2>
      <?php
        /*
          * Below are 2 different forms to be re-used       
          * 
          * Only use one at a time, comment out the other 1!       
          *
          */
        include 'includes/simple.php'; #demonstrates a simple contact form
        //include 'includes/multiple.php';#demonstrates multiple form elements

      ?>
      <p class="clear-recaptcha"></p>  
 
     <footer>
      <p><small>© 2019 by <a href="contact.php">Contact (Martin Freiwald) </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->   
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
      }
    }   
  </script> 
</body>
</html>
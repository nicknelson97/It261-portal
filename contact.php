<!DOCTYPE html>
<html>
 <head>
     <title>Contact Me</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
 </head>
 <body>
     <main class="wrapper">
     <header>
     <h1><a href="index.php"><i class="logo fa fa-home"></i>Dominick Nelson: IT 162 Portal Website</a></h1>
     <nav>
        <ul class="topnav" id="myTopnav">
            <li><a href="index.php">Welcome</a></li>
            <li><a href="big/index.php">BIG</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart/layout</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contact.php" class="selected">Contact Dominick</a></li>
            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
     </nav>
     </header>
    	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "nicknelson97@gmail.com";  //place your/your client's email address here
        $toName = "Dominick Nelson"; //place your client's name here
        $website = "nicknelson97.xyz";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
<!-- END LEFT COL -->
     <footer>
      <p><small>&copy; 2020 by Dominick Nelson, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small> ~ <a href="contact.php">Contact</a></p>
    </footer>
     
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
  </main>
 </body>
</html>
<!DOCTYPE html>
<html>
 <head>
     <title>Dominick Nelson: IT 162 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
 </head>
 <body>
     <main class="wrapper">
     <header>
     <h1><a href="index.php"><i class="logo fa fa-home"></i>Dominick Nelson: IT 162 Portal Website</a></h1>
     <nav>
        <ul class="topnav" id="myTopnav">
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">BIG</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart/layout</a></li>
            <li><a href="http://www.wendyhsia.xyz">Final Project</a></li>
            <li><a href="contact.php">Contact Dominick</a></li>
            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
     </nav>
     </header>
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
     <img src="images/desktop.jpg" class="desktop" alt="Photo of me" />
     <img src="images/phone.jpg" class="phone" alt="Photo of my adorable cat, Percy" />
     <img src="images/tablet.jpg" class="tablet" alt="Photo of my girlfriend and I" />
     <h2 class="subheader">About Me</h2>
    
       <p>My name is Dominick Nelson and I am currently a student at Seattle Central College. I only recently moved to Seattle, and I'm still getting used to living in such a big and busy city. I'm studying for a degree in computer science, although I don't know where I want to go with it yet. </p>
           
      <p>I'm still pretty new to the computer science scene, but I've been having fun and enjoying everything I've been learning so far!</p>

       <h3>What do I like to do?</h3>

       <p>My hobbies include hanging out with my cat, walking around and taking in the Seattle scenery, and playing games with my friends and girlfriend.</p>
</section>
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
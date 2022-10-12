<!DOCTYPE html>
<html>
<head>
<title>William's IT162 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> (William's IT162 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="photo of a puma" />
 <img src="images/phone.jpg" class="phone" alt="photo of a puma" />
 <p>I love to travel and watch the Seahawks. Also my goals is to grow and become a full stack developer that specialize in Python, database and Postgres plus understanding how to code or script using Visual Studio Code with Git and Github. Additionally, learning Google Cloud and Linux has help me to be more innovated and advanced in learning and understanding web development to hopefully one day be a great developer.</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="photo of a puma" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
  <footer>
      <p><small>&copy; 2018-<?=date("Y")?> by 
          <a href="contact.php">William Anderson</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    



  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
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




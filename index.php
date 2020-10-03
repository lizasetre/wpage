<?php 
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
?>
<html> 
    <head>
      <title> Webpage Layout </title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
	    
     <div class="header">
     <h1>Smile Studio</h1>
     <section>
     <div id="insta_wrapper">
    <div class="viewfinder"></div>
    <div class="camera"></div>
    </div>       
    </section>     
     </div>
	    	    
      <div class="navbar">
        <center><a href="index.php?page=home">Home</a>
        <a href="index.php?page=aboutus">About Us</a>
        <a href="index.php?page=loginsignup">Login/Signup</a>
	<a href="index.php?page=booknow">Book Now</a>
      </div>
	      

    <div id="content">         
	    
<br><br><br><br><br><br><br><br><br><br>
	<div class="footer">
	<div class="container">
  	<ul class="submenu">
    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
    	<li><a href="#"><i class="fa fa-instagram"></i></a></li>
    	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  	</ul>
</div>	
      </div>
    </body>
</html>

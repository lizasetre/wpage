<div class="element">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<center><br><br><br><a div class="fa fa-facebook">
<a div class="fa fa-twitter">
<a div class="fa fa-instagram">
	    </div>	
      </div>
    </body>
</html>

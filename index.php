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
     <h1>Header</h1>
     </div>
	    	    
      <div class="navbar">
        <center><a href="index.php?page=product">Products</a>
        <a href="index.php?page=categories">Category</a>
        <a href="index.php?page=create">Create</a>
      </div>

    <div id="content">         
	    
<br><br><br><br><br><br><br><br><br><br>
	<div class="footer">
      </div>
    </body>
</html>

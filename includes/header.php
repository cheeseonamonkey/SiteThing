<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
  <?php
  echo "<title> $pageTitle </title>"; 
  
  $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


  ?>

  
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <link rel="stylesheet" href="styling.css">
    
  </head>
  
  
      <div class="titleWrapper">
      
      <h1 class="title"><b>Hmmm</b></h1>
    	
	<h1 class="login">
		<?php if(isset($_SESSION['username'])) {echo '<a href="logout.php">Logout</a>';} else {echo '<a href="login.php">Login</a>';} ?>
	</h1>
	</div>
    
    
	<div id="navList">
 <ul id="navlist"> 
 <li id="active"><a href="#" id="current">Home</a></li>
 <li><a href="#">About</a></li>
 <li><a href="#">Contact</a></li>
 <li><a href="#">Services</a></li>
 <li><a href="#">Portfolio</a></li>
 </ul>
 </div>
    
    

  <body>

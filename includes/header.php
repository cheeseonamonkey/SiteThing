<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
  <link rel="stylesheet" href="styling.css">

  <?php
  echo "<h2> Something </h2><br><hr>"; 
  
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


  ?>

  
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 

	<style>

.link-button {
    background: none;
    border: none;
    color: blue;
    text-decoration: underline;
    cursor: pointer;
    font-size: 100%;
}


      	

body {
      	/*background-color: #ECF6FE;*/
		
      }
	  
	  
     
     
	  
	  ul {
      
	  list-style-type: none;
 	 margin: 0;
 	 padding: 0;
	}

    li a {
      display: block;
	  text-decoration: none;
	  font-size: 130%;
	  font-weight: bold;
	  margin-left: 5px;
    }
	
	.nav li:hover
	{
		/*background-color:#b3c3f2;*/
	}
	
	.nav {
    	  /*background-color: #CFD8F3;*/
   	     width: 50%;
		 clear: both;
      }
      
	.login {
		float: right;
		height: 5%;
		width: 33%;
		text-align: right;
		/*background-color: #CFD8F3;*/
		
	}
	
	h1 {
		margin-left: 0px;
		margin-right: 0px;
		margin-bottom: 10px;
		margin-top: 5px;
	}
	
	.login:hover {
		background-color:#b3c3f2;
	}
	
	.login a {
		text-decoration: none;
		display:inline-block;
		width: 100%;
		
	}
	
	.title {
		/*background-color: #9cafe6;*/
		height: 5%;
		float: left;
      	width: 50%;
		
	}
	
	.titleWrapper {
		width: 50%;
		float: left;
	}
	
	h2 {
		margin-top: 3px;
		margin-bottom: 3px;
	}
      
    </style>


    
  </head>
  
  
      <div class="titleWrapper">
      
      <h2 class="title"><b><?php echo $pageTitle; ?></b></h2>
    	
	<h2 class="login">
		<?php if(isset($_SESSION['username'])) {echo '<a href="logout.php">Logout</a>';} else {echo '<a href="login.php">Login</a>';} ?>
	</h1>
	</div>
    
    
	<div id="navList">
 <ul id="navlist">
 <li id="active"><a href="/" id="current" style="clear:both;">Home</a></li>
 <li><a href="/copypastes.php">CopyPastes</a></li>
 <li><a href="#">.</a></li>
 <li><a href="#">.</a></li>
 <li><a href="#">.</a></li>
 </ul>
 </div>
    
    

  <body>
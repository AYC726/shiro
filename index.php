<?php

/*
 * This is the index page for Shiro project
 * It will include mainly key files, such as config.php, header.php
 * footer.php
 * CSS, JS related files will be included in the header.php file
 * It will also set up an overal framework for the site
 * 
 * @author: Christiana Chen, Alex Chiu
 * @created: Sep 2014
 */
 
 // includes server, db info
require_once 'library/config.php';

// include header
require_once 'include/header.inc.php';

?>

<style>
</style>

<body>

	<header class="main-header">
	  <div class="logo-container">
    	  <a href="/home" class="small-logo"><img src="images/logo-white-big.png" alt=""></a>
		  <a href="/home" class="big-logo"><img src="images/logo-white-big.png" alt=""></a>
	  </div>
	  
	  
	  <div class="quote-container quote-background">
		   <p>&nbsp;<br>&nbsp;</p>
	  </div>
	  
	   <div class="quote-container">
		   <p>If you don't fear the unknown, the unknown will be kind to you.<br>- Paulo Coelho</p>
	  </div>
	  
	  
	  <div class="location-search-container">
		  <input type="text" size="50" placeholder="where can I show you?" />
	  </div>

	  <div class="two-col image-col filter" style="background: url('images/IMG_0224_mod.jpg') no-repeat center top;"></div>
	  <div class="two-col image-col filter" style="background: url('images/20131011054353958.jpg') no-repeat center top;"></div>
	</header>
	
</body>
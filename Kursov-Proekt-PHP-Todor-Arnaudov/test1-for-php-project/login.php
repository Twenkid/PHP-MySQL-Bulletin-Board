<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php    
   require_once ('include_fns.php'); 
  
   $db_name =  $_SESSION['db_name'];
  
  do_html_header('Log In');	
  ?>
  
  <br>
  <hr>
  <br>
  <center>
  <form name="login" action="doLogin.php" method="post">
  <font size=4>
  Username: <input type="text" name="username">
  <p>
  Password: <input type="password" name="password" method="post">
  <p>
  <input type="submit" action="doLogin.php" value="Log In">  
  </form>
  </center>
  <hr>
  <br>
  <div class="mainmenu1">
  <?php
  
	//display_articles();
	do_html_footer();
	echo "</div>";
	?>
	

	
	
   
  
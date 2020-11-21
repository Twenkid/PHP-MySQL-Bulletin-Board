<?php
 session_start();
 unset( $_SESSION['current_user']); 
 unset( $_SESSION['current_userID']);

// $_SESSION['current_user'] = "nobody";
// unset($_SESSION);
// session_destroy();
//  $_SESSION['current_user']="nobody";
// $_SESSION=null;
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php    
   require_once ('include_fns.php'); 
   //$_SESSION['current_user'];
//   echo "SESSION?"; //$current_user"; 
   $_SESSION['current_userID'] = 0;
     
  do_html_header('Logged Out');		
  do_html_footer();
  ?>
  
	
	
   
  
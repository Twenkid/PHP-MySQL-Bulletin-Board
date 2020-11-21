<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php  
  require_once ('include_fns.php'); 
  
  do_html_header('Updating profile...');	

  $nick = AddSlashes($_GET['nick']);
  $prof = AddSlashes($_GET['profile']);
  
  $db2 = mysql_connect('localhost', 'user', '123');    
  mysql_select_db("test1", $db2);	
  $query  = "update users set nickname = '$nick', description = '$prof' where nickname='$nick'";
    
  //$result = mysql_query($query, $db);
  $result = mysql_query($query, $db2);
  if (!$result) echo 'DB was not updated!';

  
  do_html_footer();
?>
	

	
	
   
  
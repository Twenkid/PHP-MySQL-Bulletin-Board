<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php
    require_once ('include_fns.php'); 
  
  do_html_header('Delete article');	
  
  $db2 = mysql_connect('localhost', 'username', 'password');
   $db_name =  $_SESSION['db_name'];
   mysql_select_db($db_name, $db2);	
  
  $id = $_GET['id'];
    
  $query  = "delete from data where postid=$id";
  $result = mysql_query($query, $db2);
  if (!$result) echo 'The article was not deleted!';
  else
  {
   echo  'The article was deleted!';
  }
  
  do_html_footer();
  
?>
	

	
	
   
  
